<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("select a.*,
							 	case when a.level = '1' then 'Kasie'
							 		 when a.level = '2' then 'Foreman'
							 		 when a.level = '3' then 'Karyawan'
							 		 when a.level = '4' then 'AHMIC'
                                                                         when a.level = '5' then 'Administrator'
							 	else 'Not Defined' end as status,
							 	b.nm_pegawai from tb_user a left join tb_pegawai b on b.id = a.id_pegawai");

		return $sql;
	 
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from tb_user where id = '$id'");

		return $sql;
	 
	}

	public function opt_pegawai()
	{	
		$sql =$this->db->query("select * from tb_pegawai order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		$sql = $this->db->query("insert into tb_user (id,username,password,id_pegawai,level) VALUES (null,'$datapos[username]','$datapos[password]','$datapos[opt_pegawai]','$datapos[opt_level]')");

		return $sql;
	}

	public function pro_edit_with_pass($datapos){
		$sql = $this->db->query("update tb_user set username = '$datapos[username]', password = '$datapos[password]', level = '$datapos[opt_level]',id_pegawai = '$datapos[opt_pegawai]' where id = '$datapos[id]'");

		return $sql;
	}

	public function pro_edit_no_pass($datapos){
		$sql = $this->db->query("update tb_user set username = '$datapos[username]', level = '$datapos[opt_level]',id_pegawai = '$datapos[opt_pegawai]' where id = '$datapos[id]'");
		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tb_user where id = '$id'");
		return $sql;
	}
}
