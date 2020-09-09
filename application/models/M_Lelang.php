<?php
class M_Lelang extends CI_Model{	
	

	public function banyak_lelang($id){
		$tgl = date('Y-m-d H:i:s');
		$query = $this->db->query("SELECT * FROM lelang where TanggalSelesai>='$tgl' and JenisLelangID='$id' and StatusLelang='aktif' ");
		return $query->num_rows();
	}
	
	public function banyak_lelang2(){
		
		$query = $this->db->query("SELECT * FROM lelang ");
		return $query->num_rows();

	}
	
	public function banyak_lelang_perjenis($id){
		
		$query = $this->db->query("SELECT * FROM lelang where JenisLelangID='$id' Limit 3");
		return $query->num_rows();

	}
	
	public function cek_id_tahapan_lelang(){
		$id = $this->input->get('no');
		$tgl = date('Y-m-d H:i:s');
		$query = $this->db->query("SELECT * FROM tahapan_lelang,jenis_tahapan_lelang where 
		NomorLelang='$id' and TanggalMulai<='$tgl' and tahapan_lelang.TahapanLelangID=jenis_tahapan_lelang.TahapanLelangID");
		return $query->result();
		
	}
	
	public function cek_no_lelang(	){
		
		$query = $this->db->query("select max(NomorLelang)as maksi from lelang");
		
		return $query->result();
	}
	
	public function cek_penawaran(){
		$id = $this->input->get('no');
		$no = $this->input->get('pend');
		
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang
		where rekanan_tahapan_lelang.NomorLelang='$id' and rekanan_tahapan_lelang.NoPendaftaran='$no'" );
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}
	
	public function cek_pemenang_lelang(){
		$id = $this->input->get('no');
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang,rekanan,lelang,jenis_lelang where 
		rekanan_tahapan_lelang.NomorLelang='$id' and StatusPeserta='Pemenang' and StatusDokumen = 'Lengkap'
		and lelang.NomorLelang = rekanan_tahapan_lelang.NomorLelang
		and rekanan_tahapan_lelang.NoPendaftaran = rekanan.NoPendaftaran
		and lelang.JenisLelangID = jenis_lelang.JenisLelangID");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function cek_tahapan_lelang($id){
		$tgl = date('Y-m-d H:i:s');
		$query = $this->db->query("SELECT * FROM tahapan_lelang,jenis_tahapan_lelang where 
		NomorLelang='$id' and TanggalMulai<='$tgl' and tahapan_lelang.TahapanLelangID=jenis_tahapan_lelang.TahapanLelangID");
		return $query->result();
	}
	
	public function data($number,$offset){
		 $this->db->order_by('TanggalSelesai', 'desc');
		return $query = $this->db->get('lelang',$number,$offset)->result();		
	}
	
	public function data_perjenis($number,$offset,$id){
		$this->db->where('lelang.JenisLelangID', $id);
		 $this->db->order_by('TanggalSelesai', 'desc');
		$query = $this->db->get('lelang',$number,$offset);
		return $query->result();		
	}
	
	public function data_histori($number,$offset){
		$id=$this->session->userdata("no_pendaftaran");
		$this->db->where('rekanan_tahapan_lelang.NoPendaftaran', $id);
		 $this->db->order_by('TanggalMenawar', 'desc');
		$query = $this->db->get('rekanan_tahapan_lelang',$number,$offset);
		return $query->result();		
	}
	
	public function detail_lelang(){
		$id = $this->input->get('no');
		$tgl = date('Y-m-d H:i:s');
		$query = $this->db->query("SELECT * FROM tahapan_lelang,jenis_tahapan_lelang,lelang,jenis_lelang
		where tahapan_lelang.NomorLelang='$id' and tahapan_lelang.TanggalMulai<='$tgl' 
		and lelang.NomorLelang=tahapan_lelang.NomorLelang 
		and lelang.JenisLelangID=jenis_lelang.JenisLelangID  
		and tahapan_lelang.TahapanLelangID=jenis_tahapan_lelang.TahapanLelangID	" );
		return $query->result();

	}
	
	public function detail_lelang2($id){
		$query = $this->db->query("SELECT * FROM lelang where NomorLelang='$id'" );
		return $query->result();

	}
	
	public function edit_penawaran($penawaran,$nama_file){
		$no_pendaftaran=$this->session->userdata("no_pendaftaran");
		$no_lelang = $this->input->post('no');
		$data = array(
						'NoPendaftaran' => $no_pendaftaran,
						'NomorLelang' => $no_lelang,
						'HargaPenawaran' => $penawaran,
						'dokPenawaran' => $nama_file,
						'TanggalMenawar' => date('Y-m-d H:i:s'),
						'StatusPeserta' => 'proses',
						'StatusDokumen' => 'proses'
					);
		$this->db->where('NoPendaftaran', $no_pendaftaran);
		$result = $this->db->update('rekanan_tahapan_lelang', $data);
		return $result;
	}
	
	public function getFileByFileId($fileId){
		$result = $this->db->select('rekanan_tahapan_lelang.*')
							->from('rekanan_tahapan_lelang')
							->where('No',$fileId)
							->get()
							->row();

		return $result;
	}
	
	public function banyak_penawaran(){
		$id=$this->session->userdata("no_pendaftaran");
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang where NoPendaftaran='$id' ");
		return $query->num_rows();

	}
	
	public function jenis_lelang(){
		
		$query = $this->db->query("SELECT * FROM jenis_lelang ");
		return $query->result();
	
	}
	
	public function jenis_lelang2($id){
		
		$query = $this->db->query("SELECT * FROM jenis_lelang where JenisLelangID='$id'");
		return $query->result();
	
	}
	
	public function jenis_tahapan(){
		$id = $this->input->get('no');
		$tgl = date('Y-m-d H:i:s');
		$query = $this->db->query("SELECT * FROM tahapan_lelang,jenis_tahapan_lelang where 
		NomorLelang='$id' and TanggalMulai<='$tgl' and tahapan_lelang.TahapanLelangID=jenis_tahapan_lelang.TahapanLelangID");
		return $query->result();
	}
	
	
	
	public function pemenang_lelang(){
		$id = $this->input->get('no');
		$query = $this->db->query("SELECT * FROM rekanan_tahapan_lelang,rekanan,lelang,jenis_lelang where 
		rekanan_tahapan_lelang.NomorLelang='$id' and StatusPeserta='Pemenang' and StatusDokumen = 'Lengkap'
		and lelang.NomorLelang = rekanan_tahapan_lelang.NomorLelang
		and rekanan_tahapan_lelang.NoPendaftaran = rekanan.NoPendaftaran
		and lelang.JenisLelangID = jenis_lelang.JenisLelangID");
		return $query->result();
	}
	
    public function lelang_perjenis($id){
		$tgl = date('Y-m-d H:i:s');
		$query = $this->db->query("SELECT * FROM lelang where TanggalSelesai>='$tgl' and JenisLelangID='$id' and StatusLelang='aktif' ");
		return $query->result();

	}
	
	public function lelang_perjenis2($id){
		$query = $this->db->query("SELECT * FROM lelang where JenisLelangID='$id' ");
		return $query->result();

	}
	public function lelang_perjenis3(){
		$id= $this->input->get('jenis_lelang');
		$query = $this->db->query("SELECT * FROM lelang where JenisLelangID='$id' ");
		return $query->result();

	}
	
	
	public function semua_lelang(){
		$query = $this->db->query("SELECT * FROM lelang order by TanggalMulai desc");
		return $query->result();
	
	}
	
	public function simpan_lelang($jenis_lelang,$nama_file){
		$nama_lelang = $this->input->post('nama_lelang');
		$akhir_pendaftaran = $this->input->post('7b');
		$pengguna_lelang= $this->input->post('pengguna_lelang');
		$keterangan = $this->input->post('keterangan');
		$HPS = $this->input->post('hps');
		$nilai_pagu = $this->input->post('nilai_pagu');
		$status_lelang = $this->input->post('status_lelang');
		$nama_lelang = $this->input->post('nama_lelang');
		$sumber_dana = $this->input->post('sumber_dana');
		$tahun_anggaran = $this->input->post('tahun_anggaran');
		$satuan_kerja = $this->input->post('satuan_kerja');
		$lokasi = $this->input->post('lokasi');
		$instansi = $this->input->post('instansi');
		$sistem_pengadaan = $this->input->post('sistem_pengadaan');
		
		$cek_no = $this->M_Lelang->cek_no_lelang();
				foreach($cek_no as $id1);
				$data_potong = substr($id1->maksi,5,5);
				$data_potong++;
				$kode="";
				for ($j=strlen($data_potong); $j<=4; $j++){
				$kode = $kode."0";
				$no_lelang= "LLG-$kode$data_potong";
				}
		
		$data = array(
						'NomorLelang' => $no_lelang,
						'JenisLelangID' => $jenis_lelang,
						'NamaLelang' => $nama_lelang,
						'TanggalBuat' => date('Y-m-d H:i:s'),
						'TanggalSelesai' => $akhir_pendaftaran,
						'PenggunaLelang' => $pengguna_lelang,
						'Keterangan' => $keterangan,
						'HPS' => $HPS,
						'DokumenPersyaratan' => $nama_file,
						'StatusLelang' => $status_lelang,
						'LastUpdate' => date('Y-m-d H:i:s'),
						'SumberDana' => $sumber_dana,
						'TahunAnggaran' => $tahun_anggaran,
						'NilaiPagu' => $nilai_pagu,
						'LokasiPekerjaan' => $lokasi,
						'SatuanKerja' => $satuan_kerja,
						'Instansi' => $instansi,
						'SistemPengadaan' => $sistem_pengadaan
					);
		$result=$this->db->insert('lelang',$data);			
					
		$jenis_tahapan = $this->M_Lelang->jenis_tahapan2();
			foreach($jenis_tahapan as $b){	
				$data2 = array(
						'TanggalMulai' => $this->input->post(''.$b->TahapanLelangID.'a'),
						'TanggalSelesai' => $this->input->post(''.$b->TahapanLelangID.'b'),
						'NomorLelang' => $no_lelang,
						'TahapanLelangID' => $b->TahapanLelangID,
						'LastUpdate' => date('Y-m-d H:i:s')
					);			
				$insert=$this->db->insert('tahapan_lelang',$data2);
			}
		
		return $result;
	}
	
	public function simpan_penawaran($penawaran,$nama_file){
		$no_pendaftaran=$this->session->userdata("no_pendaftaran");
		$no_lelang = $this->input->post('no');
		$data = array(
						'NoPendaftaran' => $no_pendaftaran,
						'NomorLelang' => $no_lelang,
						'HargaPenawaran' => $penawaran,
						'dokPenawaran' => $nama_file,
						'TanggalMenawar' => date('Y-m-d H:i:s'),
						'StatusPeserta' => 'proses',
						'StatusDokumen' => 'proses'
					);
		$result=$this->db->insert('rekanan_tahapan_lelang',$data);
		
		return $result;
	}
	
	public function tahapan_lelang(){
		$id = $this->input->get('no');
		$query = $this->db->query("SELECT * FROM tahapan_lelang,jenis_tahapan_lelang where 
		NomorLelang='$id' and tahapan_lelang.TahapanLelangID=jenis_tahapan_lelang.TahapanLelangID");
		return $query->result();
	}
	
	public function jenis_tahapan2(){
		$query = $this->db->query("SELECT * FROM jenis_tahapan_lelang ");
		return $query->result();
	}
}
?>
