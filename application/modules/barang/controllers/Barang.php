<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_barang');
		  //jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['listing'] = $this->model_barang->listing();
		$this->load->view('barang/barang_view',$data);
	}

	public function add(){
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_gudang'] = $this->model_barang->opt_gudang();
	 
		$this->load->view('barang/barang_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_gudang'] = $this->model_barang->opt_gudang();
	 	$data['listing'] = $this->model_barang->edit($id)->row();
		$this->load->view('barang/barang_edit',$data);
	}

	public function pro_add(){
		 
	 
		$datapos = array('part_number'=>$this->input->post('part_number'),
						 'nama'=> $this->input->post('nama'),
						 'id_gudang'=> $this->input->post('id_gudang'),
						 'qty'=>0
						 );
		$sql =$this->model_barang->pro_add($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('barang')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('barang')."';
		        </script>";
		}
	}

	public function pro_edit(){
		 
		$datapos = array('id'=>$this->input->post('id'),
						 'part_number'=>$this->input->post('part_number'),
						 'nama'=> $this->input->post('nama'),
						 'id_gudang'=> $this->input->post('id_gudang')
						 );

		$sql =$this->model_barang->pro_edit($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('barang')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('barang')."';
		        </script>";
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_barang->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('barang')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('barang')."';
		        </script>";
		}
	}




	 
}
