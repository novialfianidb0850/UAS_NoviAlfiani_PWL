<?php
if(!defined('BASEPATH')) die('No Access');
/**
 * 
 */
class Import_excel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('excel_model');
	}

	public function index()
	{
		$data = array(
			'data_corona'=>$this->excel_model->readCorona()
		);

		$this->load->view('corona_excel',$data);
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
    redirect('Import_excel');
	}

}