<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corona extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('corona_model','corona');
	}

	public function index()
	{
		$data['user']= $this->db->get_where('web_login', ['email'=>
		$this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Corona';

		$this->load->helper('url');
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('corona_view',$data);
		$this->load->view('template/footer');
	}

	public function ajax_list()
	{
		$list = $this->corona->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $corona) {
			$no++;
			$row = array();
			$row[] = $corona->id;
			$row[] = $corona->kecamatan;
			$row[] = $corona->pp;
			$row[] = $corona->odp;
			$row[] = $corona->pdp;
			$row[] = $corona->otg;
			$row[] = $corona->positif;
			
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_corona('."'".$corona->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_corona('."'".$corona->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->corona->count_all(),
						"recordsFiltered" => $this->corona->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->corona->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'kecamatan' => $this->input->post('kecamatan'),
				'pp' => $this->input->post('pp'),
				'odp' => $this->input->post('odp'),
				'pdp' => $this->input->post('pdp'),
				'otg' => $this->input->post('otg'),
				'positif' => $this->input->post('positif'),
			);
		$insert = $this->corona->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'kecamatan' => $this->input->post('kecamatan'),
				'pp' => $this->input->post('pp'),
				'odp' => $this->input->post('odp'),
				'pdp' => $this->input->post('pdp'),
				'otg' => $this->input->post('otg'),
				'positif' => $this->input->post('positif'),
			);
		$this->corona->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->corona->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	public function unggah()
	{
		$fileName = $_FILES['file']['name'];

		$config = array(
			'upload_path' => './assets/'
			,'allowed_types' => 'xls|xlsx|csv'
			,'max_size' => 10000
		);

		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('file')){
			$this->upload->display_error();
			die();
		}

		$inputFileName = './assets/'.$fileName;
	try {
      $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
      $objPHPExcel = $objReader->load($inputFileName);
    } catch (Exception $e) {
      die('Error');
    }

    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();

    for ($baris=2; $baris <= $highestRow; $baris++) {
      $rowData = $sheet->rangeToArray('A'.$baris.':'.$highestColumn.$baris, NULL, TRUE, FALSE);

      $data = array(
        'id' => $rowData[0][0]
        , 'kecamatan' => $rowData[0][1]
        , 'pp' => $rowData[0][2]
        , 'odp' => $rowData[0][3]
        , 'pdp' => $rowData[0][4]
        , 'otg' => $rowData[0][5]
        , 'positif' => $rowData[0][6]
      );

      $this->db->insert('tbl_corona', $data);
    }
    redirect('corona');
	}

}