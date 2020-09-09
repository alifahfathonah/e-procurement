<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->database();
		$this->load->model("M_Lelang");
		$this->load->model("M_Pengumuman");
		$this->load->model("M_Pegawai");
		$this->load->model("M_Rekanan");
		$this->load->model("M_User");
		$this->load->model("M_Admin");
		$this->load->model("M_Panitia");
		$this->load->library('pagination');
		
		$this->load->helper("date");
		
		$this->load->helper(array('url','download'));
		
		
	}
	public function index()
	{	if($this->session->userdata('logged_in')!==TRUE) redirect('user/index');
		$this->load->view('head');
        $this->load->view('home-login');
        $this->load->view('footer');
	}
	public function register()
	{
			//tampung data dari form
            	$nama = $this->input->post('nama_rekanan');
				$alamat = $this->input->post('alamat_rekanan');
				$alamat_kantor = $this->input->post('alamat_kantor');
				$deskripsi = $this->input->post('deskripsi');
				$email = $this->input->post('email');
				$no_npwp= $this->input->post('no_npwp');
				$no_siup= $this->input->post('no_siup');
				$penanggung_jawab = $this->input->post('penanggung_jawab');
				$telepon= $this->input->post('telepon');
				$fax= $this->input->post('fax');
				$status='aktif';
				
				$tahun_berdiri= $this->input->post('tahun_berdiri');
				
				$jenis_user=2;
				
				$cek_no = $this->M_Rekanan->cek_no_pendaftaran();
				foreach($cek_no as $id1);
				$data_potong = substr($id1->maksi,5,5);
				$data_potong++;
				$kode="";
				for ($j=strlen($data_potong); $j<=4; $j++){
				$kode = $kode."0";
				$no_pendaftaran= "PEN-$kode$data_potong";
				}
				
				$tgl = date('Y-m-d h:i:s');
            	
 
                $password=md5($_POST['password']);
				$cek_email = $this->M_Rekanan->cek_email($email);
				$cek_nama = $this->M_Rekanan->cek_nama_rekanan($nama);
				
				$awal  = date_create($tahun_berdiri);
				$akhir = date_create(); // waktu sekarang
				$diff  = date_diff( $awal, $akhir );
				
				if($cek_email==true){
					echo '<script>alert("Email yang diinputkan sudah ada .");window.location="/e-procurement/index.php/user/index";</script>';
				}
				else if($cek_nama==true){
					echo '<script>alert("Nama Perusahaan yang diinputkan sudah ada .");window.location="/e-procurement/index.php/user/index";</script>';
				}
				else if( $diff->y<5){
					echo '<script>alert("Umur perusahaan masih kurang dari 5 tahun .");window.location="/e-procurement/index.php/user/index";</script>';
				}
				
				else{
					
					$config['upload_path']         = 'dokumen/rekanan/';  // folder upload 
					$config['allowed_types']        = 'zip'; // jenis file
					$config['max_size']             = 3000;
		 
					$this->load->library('upload', $config);
		 
					if ( ! $this->upload->do_upload('dokumen')) //sesuai dengan name pada form 
					{
						   echo '<script>alert("File lebih dari 3Mb atau tidak berekstensi .zip ");window.location="/e-procurement/index.php/user/index";</script>';
					}
					else
					{	
						$file = $this->upload->data();
						$dokumen = $file['file_name'];
						$data1 = array(
							'NoPendaftaran' => $no_pendaftaran,
							'NO_NPWP' => $no_npwp,
							'NO_SIUP' => $no_siup,
							'NamaRekanan' => $nama,
							'TahunBerdiri' => $tahun_berdiri,
							'KontakPerson' => $penanggung_jawab,
							'AlamatRekanan' => $alamat,
							'NoTelephone' => $telepon,
							'NoFax' => $fax,
							'Email' => $email,
							'AlamatKantorPusat' => $alamat_kantor,
							'DeskripsiPerusahaan' => $telepon,
							'StatusRekanan' => $status,
							'dokRekanan' => $dokumen,
							'LastUpdate' => $tgl
							);
						$data2 = array(
							'JenisUserID' => $jenis_user,
							'Email' => $email,
							'Password' => $password,
							'StatusUser' => $status
							);	
						$this->M_Rekanan->input_data($data2,'user');
						$this->M_Rekanan->input_data($data1,'rekanan');
						$this->session->set_userdata(array(
							'email'=>$email,
							'nama'=>$nama,
							'no_pendaftaran'=>$no_pendaftaran,
							'penanggung_jawab'=>$nama,
							'password'=>$password,
							'logged_in'=>TRUE
							));
							
						echo '<script>alert("Selamat Datang '.$penanggung_jawab.' .");window.location="../rekanan/index";</script>';	
			
					}
					
					
				}
		
	}
	
	public function download_dokumen_rekanan($file){				
		force_download('dokumen/rekanan/'.$file.'',NULL);
	}	
	
	public function detail_rekanan(){
		$result = $this->M_Rekanan->detail_rekanan();
		echo json_encode($result);
	}
}
?>