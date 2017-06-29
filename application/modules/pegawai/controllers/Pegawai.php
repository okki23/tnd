<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_pegawai');
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
		$data['listing'] = $this->model_pegawai->listing();
		$this->load->view('pegawai/pegawai_view',$data);
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
	 	$data['opt_kas_for'] = $this->model_pegawai->get_kas_for();
 		$this->load->view('pegawai/pegawai_add',$data);
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
		 $data['opt_kas_for'] = $this->model_pegawai->get_kas_for();
	 	$data['listing'] = $this->model_pegawai->edit($id)->row();
		$this->load->view('pegawai/pegawai_edit',$data);
	}

	public function pro_add(){
		 
		$datapos = array('nrp'=> $this->input->post('nrp'),
						 'nm_pegawai'=> $this->input->post('nm_pegawai'),
						 'no_telp'=> $this->input->post('no_telp'),
						 'email'=> $this->input->post('email'),
						 'alamat'=> $this->input->post('alamat'),
						 'seksi'=> $this->input->post('seksi'),
						 'opt_kasie'=> $this->input->post('opt_kasie'),
						 'opt_foreman'=> $this->input->post('opt_foreman')
						 );

		//var_dump($datapos);
		//exit();
		$sql =$this->model_pegawai->pro_add($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('pegawai')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('pegawai')."';
		        </script>";
		}
	}

	public function pro_edit(){
		 
		$datapos = array('id'=> $this->input->post('id'),
						 'nrp'=> $this->input->post('nrp'),
						 'nm_pegawai'=> $this->input->post('nm_pegawai'),
						 'no_telp'=> $this->input->post('no_telp'),
						 'email'=> $this->input->post('email'),
						 'alamat'=> $this->input->post('alamat'),
						 'seksi'=> $this->input->post('seksi'),
						 'opt_kasie'=> $this->input->post('opt_kasie'),
						 'opt_foreman'=> $this->input->post('opt_foreman')
						 );

		//var_dump($datapos);
		//exit();
		$sql =$this->model_pegawai->pro_edit($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('pegawai')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('pegawai')."';
		        </script>";
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_pegawai->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('pegawai')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('pegawai')."';
		        </script>";
		}
	}




	 
}
