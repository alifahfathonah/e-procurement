<?php
class M_Admin extends CI_Model{	
	
	public function banyak_lelang2(){
		
		$query = $this->db->query("SELECT * FROM lelang ");
		return $query->num_rows();

	}
	
	public function cek_admin($email){
		
		$query = $this->db->query("SELECT * FROM admin where Email ='$email'");
		return $query->result();

	}
	
}
?>
