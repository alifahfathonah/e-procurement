<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	{	
		$this->load->view('head');
        $this->load->view('home-login');
        $this->load->view('footer');
	}
	public function tampil_pengumuman()
	{
		$data['id'] = $_POST['id'];
        $template_konten = 'pengumuman/modal_pengumuman';
        echo $this->load->view($template_konten, $data, true);
	}
	
	function login(){
		if($this->session->userdata('logged_in')==TRUE) redirect('a/index');
		
		$email = $_POST['email'];
		$password = md5($_POST['password']);
        
        $cek=$this->M_User->cek_login($email,$password);
		if($cek==true){
		foreach($cek as $r);
			if($r->JenisUserID==1){
				$cek_admin=$this->M_Admin->cek_admin($email);
				foreach($cek_admin as $a);
				$email=$r->Email;
				$password=$r->Password;
				$nama=$a->Nama;
				$id_admin=$a->AdminID;
				$this->session->set_userdata(array(
								'email'=>$email,
								'nama'=>$nama,
								'password'=>$password,
								'id_admin'=>$id_admin,
								'logged_in'=>TRUE
								));
				echo "<script>alert('Selamat Datang $nama ');window.location='/e-procurement/index.php/panitia/index';</script>";
			}
			else if($r->JenisUserID==2){
				$cek_rekanan=$this->M_Rekanan->cek_email($email);
				foreach($cek_rekanan as $a);
				$nama=$a->NamaRekanan;
				$penanggung_jawab=$a->KontakPerson;
				$no_pendaftaran=$a->NoPendaftaran;
				$email=$r->Email;
				$password=$r->Password;
				$this->session->set_userdata(array(
								'email'=>$email,
								'nama'=>$nama,
								'no_pendaftaran'=>$no_pendaftaran,
								'penanggung_jawab'=>$penanggung_jawab,
								'password'=>$password,
								'logged_in'=>TRUE
								));
				echo "<script>alert('Selamat Datang $penanggung_jawab ');window.location='/e-procurement/index.php/rekanan/index';</script>";
			}
			else {
				$cek_pegawai=$this->M_Pegawai->cek_email($email);
				foreach($cek_pegawai as $a);
				$nama=$a->NamaPegawai;
				$nip=$a->NIP;
				$email=$r->Email;
				$password=$r->Password;
				$cek_jenis_lelang=$this->M_Panitia->cek_jenis_lelang($nip);
				foreach($cek_jenis_lelang as $k);
				$jenis_lelang=$k->JenisLelangID;
				$this->session->set_userdata(array(
								'email'=>$email,
								'nama'=>$nama,
								'nip'=>$nip,
								'jenis_lelang'=>$jenis_lelang,
								'password'=>$password,
								'logged_in'=>TRUE
								));
				echo "<script>alert('Selamat Datang $nama ');window.location='/e-procurement/index.php/panitia/index';</script>";
			}
			
        }
		else{
            echo "<script>alert('Email atau password salah');window.location='../user/index';</script>";
			
        }
		
		
	}
	
	function logout()
	{
    	$this->session->sess_destroy();
    	redirect('user/index');
	}
	
	
}
