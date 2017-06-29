<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("select * from tb_pegawai order by id asc");

		return $sql;
	 
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from tb_pegawai where id = '$id'");

		return $sql;
	 
	}

	public function get_kas_for(){

		$sql =$this->db->query("select * from tb_pegawai order by id asc");

		return $sql;
	}

	public function opt_pegawai()
	{	
		$sql =$this->db->query("select * from tb_pegawai order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		$datapos = array('nrp'=> $this->input->post('nrp'),
						 'nm_pegawai'=> $this->input->post('nm_pegawai'),
						 'no_telp'=> $this->input->post('no_telp'),
						 'email'=> $this->input->post('email'),
						 'alamat'=> $this->input->post('alamat'),
						 'seksi'=> $this->input->post('seksi'),
						 'opt_kasie'=> $this->input->post('opt_kasie'),
						 'opt_foreman'=> $this->input->post('opt_foreman')
						 );

	$sql = $this->db->query("insert into tb_pegawai (id,id_kasie,id_foreman,nm_pegawai,nrp,seksi,no_telp,email,alamat) VALUES (null,'$datapos[opt_kasie]','$datapos[opt_foreman]','$datapos[nm_pegawai]','$datapos[nrp]','$datapos[seksi]','$datapos[no_telp]','$datapos[email]','$datapos[alamat]')");

		return $sql;
	}

	public function pro_edit($datapos){
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

		$sql = $this->db->query("update tb_pegawai set nm_pegawai = '$datapos[nm_pegawai]', nrp = '$datapos[nrp]', no_telp = '$datapos[no_telp]', email = '$datapos[email]',alamat = '$datapos[alamat]',seksi = '$datapos[seksi]',id_kasie = '$datapos[opt_kasie]',id_foreman = '$datapos[opt_foreman]' where id = '$datapos[id]'");

		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tb_pegawai where id = '$id'");
		return $sql;
	}
}
