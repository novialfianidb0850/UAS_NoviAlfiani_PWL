<?php
if(!defined('BASEPATH'))die('tidak boleh akses langsung');

/**
 * 
 */
class Chart_corona extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('chart_model');
	}

	public function index()
	{
		$data['user']= $this->db->get_where('web_login', ['email'=>
		$this->session->userdata('email')])->row_array();
		
		$data['title'] = 'Chart Corona';
		$data['stat'] = $this->chart_model->kecamatan();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('chart_view', $data);
		$this->load->view('template/footer2');
	}
	public function morris()
	{
		$data['moris'] = $this->chart_model->getkecamatan();
		$this->load->view('morris_corona', $data);
	}	


}