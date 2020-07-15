<?php
/**
 * 
 */
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');


		if($this->form_validation->run() == false){
		$data['title'] = 'Login';
		$this->load->view('login', $data);
		}else{
			$this->_login();
		}

	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('web_login', ['email'=> $email])->row_array();
		
		if($user){

			if($user['is_active'] == 1){
					if(password_verify($password, $user['password'])){
						$data = [
							'email' => $user['email'],
							'role_id' => $user['role_id']
						];

						$this->session->set_userdata($data);
						if($user['role_id']==1){
							redirect('corona_t');
						}
						redirect('corona_t');
						
					}else{
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
						redirect('login');
					}
			}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Diaktivasi</div>');
					redirect('login');
			}

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar</div>');
			redirect('login');

		}
	}

	public function Guest()
	{
		$this->_loginGuest();

	}
	private function _loginGuest(){
		$email = 'tamu@gmail.com';
		$password = '123';

		$user = $this->db->get_where('web_login', ['email'=> $email])->row_array();
		if($user['is_active'] == 1){
			$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];

			$this->session->set_userdata($data);
			if($user['role_id']==1){
				redirect('corona_t');
			}
			redirect('corona_t');
		}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Diaktivasi</div>');
				redirect('login');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[web_login.email]',[
			'is_unique' => 'Email Sudah Terdaftar!'
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]', [
			'matches'=> 'Password Tidak Cocok',
			'min_length' => 'Password Terlalu Pendek!'
	]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

		if($this->form_validation->run() == false){
			$data['title'] = 'User Registration';
			$this->load->view('register', $data);
		}else{
			$data = [
				'nama' 		=> htmlspecialchars($this->input->post('nama', true)),
				'email' 	=> htmlspecialchars($this->input->post('email', true)),
				'image' 	=> 'default.jpg',
				'password' 	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' 	=> 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('web_login', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Account anda telah terdaftar. Silahkan login</div>');
			redirect('login');
		}
		
	}

	public function profil()
	{

		$data['user']= $this->db->get_where('web_login', ['email'=>
		$this->session->userdata('email')])->row_array();
		$data['title'] = 'Profil';

		$this->load->helper('url');
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('profil', $data );
		$this->load->view('template/footer2');
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Berhasil Keluar!</div>');
		redirect('dashboard/home');
	}
}