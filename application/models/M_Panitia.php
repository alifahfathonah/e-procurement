<?php
class M_Panitia extends CI_Model{
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		
	}
	function banyak_rekanan($id){		
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang,lelang where JenisLelangID='$id' and rekanan_tahapan_lelang.NomorLelang = lelang.NomorLelang");
		return $query->num_rows();
	}
	
	function cek_email($email){		
		$query = $this->db->query("SELECT * FROM rekanan where Email='$email' ");
		return $query->result();
	}
	function cek_jenis_lelang($nip){		
		$query = $this->db->query("SELECT * FROM panitia where NIP='$nip' ");
		return $query->result();
	}
	
	public function edit_pemenang(){
		$no_pendaftaran = $this->input->get('id');
		$no_lelang = $this->input->get('no');
		$this->db->query("UPDATE rekanan_tahapan_lelang SET StatusPeserta ='Belum Pemenang' 
		WHERE NomorLelang='$no_lelang' and NoPendaftaran!='$no_pendaftaran'");
		$result = $this->db->query("UPDATE rekanan_tahapan_lelang SET StatusPeserta ='Pemenang' 
		WHERE NomorLelang='$no_lelang' and NoPendaftaran='$no_pendaftaran'");
		return $result;
	}
	
	public function edit_belum_pemenang(){
		$no_pendaftaran = $this->input->get('id');
		$no_lelang = $this->input->get('no');
		$result = $this->db->query("UPDATE rekanan_tahapan_lelang SET StatusPeserta ='Belum Pemenang' 
		WHERE NomorLelang='$no_lelang' and NoPendaftaran='$no_pendaftaran'");
		return $result;
	}
	
	public function edit_dokumen_lengkap(){
		$no_pendaftaran = $this->input->get('id');
		$no_lelang = $this->input->get('no');
		$result = $this->db->query("UPDATE rekanan_tahapan_lelang SET StatusDokumen ='Lengkap' 
		WHERE NomorLelang='$no_lelang' and NoPendaftaran='$no_pendaftaran'");
		return $result;
	}
	
	public function edit_dokumen_belum_lengkap(){
		$no_pendaftaran = $this->input->get('id');
		$no_lelang = $this->input->get('no');
		$result = $this->db->query("UPDATE rekanan_tahapan_lelang SET StatusDokumen ='Belum Lengkap' 
		WHERE NomorLelang='$no_lelang' and NoPendaftaran='$no_pendaftaran'");
		return $result;
	}
	
	function rekanan_penawar($id){		
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang,lelang,rekanan where JenisLelangID='$id' 
		and rekanan_tahapan_lelang.NoPendaftaran = rekanan.NoPendaftaran
		and rekanan_tahapan_lelang.NomorLelang = lelang.NomorLelang Limit 3");
		return $query->result();
	}
	
	function rekanan_penawar2(){
		$id = $this->input->get('no');	
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang,rekanan where NomorLelang='$id' 
		and rekanan_tahapan_lelang.NoPendaftaran = rekanan.NoPendaftaran order by HargaPenawaran asc");
		return $query->result();
	}
	
	function riwayat_penawaran($id){		
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang where NoPendaftaran='$id'");
		return $query->result();
	}
	function riwayat_penawaran2(){
		$id = $this->input->get('no');	
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang,lelang where NoPendaftaran='$id'
		and rekanan_tahapan_lelang.NomorLelang = lelang.NomorLelang ");
		return $query->result();
	}
	
}
?>