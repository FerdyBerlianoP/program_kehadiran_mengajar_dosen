<?php 

class LoginDosen extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('d_login');

	}

	function index(){
		$this->load->view('d_login');
	}

	function aksi_login2(){
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$where = array(
			'nik' => $nik,
			'password' => $password
			);
		$cek = $this->d_login->cek_login("dosens",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $nik,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/dosen"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('logindsn'));
	}
}