<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller {

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
		if($this->session->userdata('logged_in')!==TRUE ) redirect('user/logout');
		$this->load->view('head_panitia');
        $this->load->view('panitia/home_panitia');
        $this->load->view('footer_panitia');
	}
	
	public function rekanan_penawar(){
		$result = $this->M_Panitia->rekanan_penawar2();
		echo json_encode($result);
	}
	
	public function riwayat_penawaran2(){
		$result = $this->M_Panitia->riwayat_penawaran2();
		echo json_encode($result);
	}
	
	public function semua_lelang()
	{
		if($this->session->userdata('logged_in')!==TRUE ) redirect('user/logout');
		$this->load->view('head_panitia');
        $this->load->view('panitia/semua_lelang');
        $this->load->view('footer_panitia');
	}
	
	public function tampil_pengumuman()
	{
		$data['id'] = $_POST['id'];
        $template_konten = 'pengumuman/modal_pengumuman';
        echo $this->load->view($template_konten, $data, true);
	}
	
	public function edit_pemenang()
	{
		$result = $this->M_Panitia->edit_pemenang();
		echo json_decode($result);
	}
	
	
	public function edit_belum_pemenang()
	{
		$result = $this->M_Panitia->edit_belum_pemenang();
		echo json_decode($result);
	}
	
	public function edit_dokumen_lengkap()
	{
		$result = $this->M_Panitia->edit_dokumen_lengkap();
		echo json_decode($result);
	}
	
	public function edit_dokumen_belum_lengkap()
	{
		$result = $this->M_Panitia->edit_dokumen_belum_lengkap();
		echo json_decode($result);
	}
	
	
}
