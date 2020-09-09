<?php
class M_User extends CI_Model{	
	
	public function banyak_lelang2(){
		
		$query = $this->db->query("SELECT * FROM lelang ");
		return $query->num_rows();

	}
	
	public function cek_login($email,$password){
		
		$query = $this->db->query("SELECT * FROM user where Email ='$email' and Password ='$password'");
		return $query->result();

	}
	
}
?>
