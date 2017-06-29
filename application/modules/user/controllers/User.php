<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_user');
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
		$data['listing'] = $this->model_user->listing();
		//var_dump($data['listing']);
		//exit();
		$this->load->view('user/user_view',$data);
	}

	public function add(){
		$data['judul'] = 'Program Aplikasi IP AHM';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['namapegawai'] = $this->session->userdata('namapegawai');
		$data['idpegawai'] = $this->session->userdata('idpegawai');
		$data['idkasie'] = $this->session->userdata('idkasie');
		$data['idforeman'] = $this->session->userdata('idforeman');
		$data['nrp'] = $this->session->userdata('nrp');
		$data['opt_pegawai'] = $this->model_user->opt_pegawai();

		$this->load->view('user/user_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['judul'] = 'Program Aplikasi IP AHM';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['namapegawai'] = $this->session->userdata('namapegawai');
		$data['idpegawai'] = $this->session->userdata('idpegawai');
		$data['idkasie'] = $this->session->userdata('idkasie');
		$data['idforeman'] = $this->session->userdata('idforeman');
		$data['nrp'] = $this->session->userdata('nrp');
		$data['opt_pegawai'] = $this->model_user->opt_pegawai();
		$data['listing'] = $this->model_user->edit($id)->row();
		//var_dump($data['listing']);
		$this->load->view('user/user_edit',$data);
	}

	public function pro_add(){


		$datapos = array('username'=>$this->input->post('username'),
						 'password'=>md5($this->input->post('password')),
						 'opt_pegawai'=>$this->input->post('opt_pegawai'),
						 'opt_level'=> $this->input->post('opt_level')
						 );
		//var_dump($datapos);
		//exit();

		$sql =$this->model_user->pro_add($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('user')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('user')."';
		        </script>";
		}
	}

	public function pro_edit(){

		$password = $this->input->post('password');

		$datapos = array('id'=>$this->input->post('id'),
						 'username'=>$this->input->post('username'),
						 'password'=>md5($this->input->post('password')),
						 'opt_pegawai'=>$this->input->post('opt_pegawai'),
						 'opt_level'=> $this->input->post('opt_level')
						 );
				 
		//var_dump($datapos);
		//exit();

		if($password != ''){
			$sql =$this->model_user->pro_edit_with_pass($datapos);
		}else{
			$sql =$this->model_user->pro_edit_no_pass($datapos);
		}




		if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('user')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('user')."';
		        </script>";
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_user->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('user')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('user')."';
		        </script>";
		}
	}





}
