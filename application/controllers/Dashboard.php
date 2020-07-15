<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('corona_model');
	}

	public function index()
	{
		/*Untuk Menampilkan Judul dan User*/
		$data['user']= $this->db->get_where('web_login', ['email'=>
		$this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		/*Untuk Menampilkan Sum dan Count*/
		$data['pp'] = $this->corona_model->get_sum_pp();
		$data['odp'] = $this->corona_model->get_sum_odp();
		$data['pdp'] = $this->corona_model->get_sum_pdp();
		$data['otg'] = $this->corona_model->get_sum_otg();
		$data['positif'] = $this->corona_model->get_sum_positif();
		$data['count'] = $this->corona_model->get_count();

		$this->load->helper('url');
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/dashboard', $data);
		$this->load->view('template/footer2');
	}
	public function home()
	{

	$data['user']= $this->db->get_where('web_login', ['email'=>
	$this->session->userdata('email')])->row_array();
	$data['title'] = 'Menu Utama';	

    $this->load->view('home');
	}
}