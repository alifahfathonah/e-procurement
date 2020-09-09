<?php
class M_Pegawai extends CI_Model{	
	

	public function cek_email($email){
		
		$query = $this->db->query("SELECT * FROM pegawai where Email='$email'");
		return $query->result();

	}
	
	public function semua_pegawai(){
		
		$query = $this->db->query("SELECT * FROM pengumuman order by LastUpdate desc limit 4");
		return $query->result();
	
	}
    
    public function detail_pegawai($id){
		
		$query = $this->db->query("SELECT * FROM pegawai where NIP='$id'");
		return $query->result();

	}
	public function banyak_lelang($id){
		
		$query = $this->db->query("SELECT * FROM lelang where JenisLelangID='$id' and StatusLelang='aktif'");
		return $query->num_rows();

	}
	
}
?>
