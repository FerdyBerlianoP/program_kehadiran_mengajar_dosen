<?php 

class LoginMahasiswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('w_login');

	}

	function index(){
		$this->load->view('j_login');
	}

	function aksi_login2(){
		$npm = $this->input->post('npm');
		$password = $this->input->post('password');
		$where = array(
			'npm' => $npm,
			'password' => $password
			);
		$cek = $this->w_login->cek_login("mahasiswas",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $npm,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/mahasiswa"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('loginmhs'));
	}
}