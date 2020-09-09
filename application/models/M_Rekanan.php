<?php
class M_Rekanan extends CI_Model{
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		
	}
	
	function cek_email($email){		
		$query = $this->db->query("SELECT * FROM rekanan where Email='$email' ");
		return $query->result();
	}
	function cek_nama_rekanan($nama){		
		$query = $this->db->query("SELECT * FROM rekanan where NamaRekanan='$nama' ");
		return $query->result();
	}
	
	public function cek_no_pendaftaran(	){
		
		$query = $this->db->query("select max(NoPendaftaran)as maksi from rekanan");
		
		return $query->result();
	}
	
	function detail_rekanan(){		
		$id = $this->input->get('no');
		$query = $this->db->query("SELECT * FROM rekanan where NoPendaftaran='$id' ");
		return $query->result();
	}
	
	function tampil_nasabah($email){		
		$query = $this->db->query("SELECT * FROM nasabah where email!='$email'");
		return $query->result();
	}
	
}
?>