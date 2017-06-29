<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_dashboard');
 		 $this->load->helper('ip_helper');
		 //jika tidak ada session yang terdaftar maka sistem balik ke halaman login

		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}

	}

	public function index()
	{
		$data['judul'] = 'Program Aplikasi IP AHM';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['namapegawai'] = $this->session->userdata('namapegawai');
		$data['idpegawai'] = $this->session->userdata('idpegawai');
		$data['idkasie'] = $this->session->userdata('idkasie');
		$data['idforeman'] = $this->session->userdata('idforeman');
		$data['nrp'] = $this->session->userdata('nrp');
                //echo $data['idpegawai']
		/*
		$lister = $data['username']."-".$data['level']."-".$data['namapegawai']."-".$data['idpegawai']."-".$data['idkasie']."-".$data['idforeman']."-".$data['nrp'];
		var_dump($lister);
		*/
		$this->load->view('dashboard/dashboard_view',$data);
	}

	public function view()
	{
		$data['judul'] = 'Viewku';

		$this->load->view('user/tampilan_view',$data);
	}

	public function add()
	{
		$data['judul'] = 'Add Aku';
		$this->load->view('user/tampilan_add',$data);
	}
}
