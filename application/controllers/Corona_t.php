<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corona_t extends CI_Controller {

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
		$this->load->view('corona_view_tamu', $data);
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

}