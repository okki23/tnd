<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
 
	public function auth($username,$password)
	{	
		$sql =$this->db->query("select a.*,b.id_foreman as idforeman,b.nrp,b.id as idpegawai,b.id_kasie as idkasie,b.nm_pegawai as namapegawai from tb_user a left join
			tb_pegawai b on b.id = a.id_pegawai where a.username = '$username' and a.password = '$password'");

		return $sql;
	 
	}
}
