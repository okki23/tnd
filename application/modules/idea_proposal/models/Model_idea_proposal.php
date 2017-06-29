<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_idea_proposal extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("select * from tb_ip order by id asc ");

		return $sql;
	 
	}
        
        public function listing_foreman(){
            $sql = $this->db->query("select a.*,b.*  from tb_pegawai a
inner join tb_ip b on b.id_peg  = a.id
where a.id_foreman = '".$_SESSION['idpegawai']."' ");
            return $sql;
        }
        
        public function listing_ahmic(){
            $sql = $this->db->query("select a.*,b.*,c.nm_pegawai as nm_kasie,d.nm_pegawai as nm_foreman
                                    from tb_pegawai a
                                    inner join tb_ip b on b.id_peg  = a.id
                                    inner join tb_pegawai c on c.id = a.id_kasie
                                    inner join tb_pegawai d on d.id = a.id_foreman");
            return $sql;
        }
        
        public function listing_foremans($idpeg){
            $sql = $this->db->query("select a.* from tb_pegawai a
left join tb_ip b on b.id_peg  = a.id
where a.id_kasie = '".$idpeg."'  and a.id_foreman = 0");
            return $sql;
        }
        
        
        
        public function listing_bawahan_foreman($id_foreman){
              $sql = $this->db->query("select a.*,b.*  from tb_pegawai a
inner join tb_ip b on b.id_peg  = a.id
where a.id_foreman = '".$id_foreman."' ");
            return $sql;
        }
        
        public function get_kasie_name($idpeg){
            $data = $this->db->query("select * from tb_pegawai where id_kasie = '$idpeg'")->row();
            return $data;
        }
        
        public function get_foreman_name($id){
            $data = $this->db->query("select * from tb_pegawai where id_foreman = '$idpeg'")->row();
            return $data;           
        }
        
        public function getname($username){
           $sql =$this->db->query("select a.* from tb_pegawai a
                        inner join tb_user b on b.id_pegawai = a.id
                        where b.username LIKE '%".$username."%' ")->row();

		return $sql;
        }
        
	public function listing_emp($username)
	{	/*
select a.* from tb_ip a
inner join tb_user b on b.id_pegawai = a.id_peg where b.username LIKE '%tri%'         */
		$sql =$this->db->query("select a.* from tb_ip a
inner join tb_user b on b.id_pegawai = a.id_peg where b.username LIKE '".$username."' order by a.id asc ");

		return $sql;
	 
	}

	public function get_no(){
		$query = $this->db->query("SELECT SUBSTR(MAX(no_reg),-7) AS id  FROM tb_ip");
	        //$query = $this->db->query("select max(personnel_id) as id from human_pa_md_emp_personal");
	        
		return $query;
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from tb_ip where id = '$id'");

		return $sql;
	 
	}

	public function get_kas_for(){

		$sql =$this->db->query("select * from tb_ip order by id asc");

		return $sql;
	}

	public function opt_pegawai()
	{	
		$sql =$this->db->query("select * from tb_pegawai order by id asc ");

		return $sql;
	 
	}

	public function opt_idea_proposal()
	{	
		$sql =$this->db->query("select * from tb_ip order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		 
	$sql = $this->db->query("insert into tb_ip (id,no_reg,id_peg,nama,nrp,seksi,risalah,tanggal,tema_ip,ksp,upload_ksp,kstp,upload_kstp,akibat,standarisasi,upload_standarisasi,manfaat) VALUES (null,'$datapos[no_reg]','$datapos[id_pegawai]','$datapos[nama]','$datapos[nrp]','$datapos[seksi]','$datapos[risalah]','$datapos[tanggal]','$datapos[tema_ip]','$datapos[ksp]','$datapos[fupload_ksp]','$datapos[kstp]','$datapos[fupload_kstp]','$datapos[akibat]','$datapos[standarisasi]','$datapos[fupload_standarisasi]','$datapos[manfaat]')");

	/*
	$sql = $this->db->query("insert into tb_ip (id,no_reg,id_peg,nama,nrp,seksi,risalah,tanggal,tema_ip,ksp,upload_ksp,kstp,upload_kstp,akibat,standarisasi,upload_standarisasi,manfaat,komentar,penilaian,komentar_aprove,is_aprove_foreman,is_aprove_kasie,is_aprove_ahmic) VALUES (null,'$datapos[no_reg]','$datapos[opt_nama]','$datapos[nama]','$datapos[nrp]','$datapos[seksi]','$datapos[risalah]','$datapos[tanggal]','$datapos[tema_ip]','$datapos[ksp]','$datapos[fupload_ksp]','$datapos[kstp]','$datapos[fupload_kstp]','$datapos[akibat]','$datapos[standarisasi]','$datapos[fupload_standarisasi]','$datapos[manfaat]','$datapos[komentar]','$datapos[penilaian]','$datapos[komentar_aprove]','$datapos[is_aprove_foreman]','$datapos[is_aprove_kasie]','$datapos[is_aprove_ahmic]')");

*/
		return $sql;
	}

	public function pro_edit($datapos){
		/*
		 $sql = $this->db->query("insert into tb_ip (id,no_reg,id_peg,nama,nrp,seksi,risalah,tanggal,tema_ip,ksp,upload_ksp,kstp,upload_kstp,akibat,standarisasi,upload_standarisasi,manfaat) VALUES (null,'$datapos[no_reg]','$datapos[opt_nama]','$datapos[nama]','$datapos[nrp]','$datapos[seksi]','$datapos[risalah]','$datapos[tanggal]','$datapos[tema_ip]','$datapos[ksp]','$datapos[fupload_ksp]','$datapos[kstp]','$datapos[fupload_kstp]','$datapos[akibat]','$datapos[standarisasi]','$datapos[fupload_standarisasi]','$datapos[manfaat]')");
		*/


		$sql = $this->db->query("update tb_ip set id_peg = '$datapos[id_pegawai]', nama = '$datapos[nama]', nrp = '$datapos[nrp]', seksi = '$datapos[seksi]',risalah = '$datapos[risalah]',seksi = '$datapos[seksi]',risalah = '$datapos[risalah]',tanggal = '$datapos[tanggal]',tema_ip = '$datapos[tema_ip]',ksp = '$datapos[ksp]',upload_ksp = '$datapos[fupload_ksp]',kstp = '$datapos[kstp]',upload_kstp = '$datapos[fupload_kstp]',akibat = '$datapos[akibat]',standarisasi = '$datapos[standarisasi]',upload_standarisasi = '$datapos[fupload_standarisasi]',manfaat = '$datapos[manfaat]' where id = '$datapos[id]'");

		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tb_ip where id = '$id'");
		return $sql;
	}
}
