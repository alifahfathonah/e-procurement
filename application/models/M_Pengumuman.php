<?php
class M_Pengumuman extends CI_Model{	
	

	
	public function semua_pengumuman(){
		
		$query = $this->db->query("SELECT * FROM pengumuman order by LastUpdate desc limit 4");
		return $query->result();
	
	}
	public function semua_pengumuman2($id){
		
		$query = $this->db->query("SELECT * FROM pengumuman  where NoPengumuman !='$id' order by LastUpdate desc limit 4");
		return $query->result();
	
	}
    
    public function detail_pengumuman($id){
		
		$query = $this->db->query("SELECT * FROM pengumuman where NoPengumuman='$id'");
		return $query->result();

	}
	public function banyak_pengumuman(){
		
		$query = $this->db->query("SELECT * FROM pengumuman ");
		return $query->num_rows();

	}
	
	public function data($number,$offset){
		return $query = $this->db->get('pengumuman',$number,$offset)->result();		
	}
	
}
?>
