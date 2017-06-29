<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_login');
		 $this->load->helper('ip_helper');
	}


	public function index()
	{
	 	$data['judul'] = 'Program Aplikasi IP AHM';
		$this->load->view('login/login_view',$data);
		//echo '21';
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		//echo $username. "<br>" .$password. "<br>";
		//exit();


		$cek = $this->model_login->auth($username,$password)->num_rows();
		$get = $this->model_login->auth($username,$password)->row();
		if($cek > 0){
			$list = array('username'=>$get->username,'level'=>level_help($get->level),'namapegawai'=>$get->namapegawai,'idpegawai'=>$get->idpegawai,'idkasie'=>$get->idkasie,'nrp'=>$get->nrp,'idforeman'=>$get->idforeman);
			$this->session->set_userdata($list);
			//echo "1";
		 	redirect(base_url('dashboard'));
		}else{
			//echo "0";
			redirect(base_url('login'));
		}

	}

	public function logout(){
		//mematikan seluruh session yang sudah terdaftar dan kembali ke halaman login
		$this->session->sess_destroy($data);
		redirect(base_url('login'));
	}



}
