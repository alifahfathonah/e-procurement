<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

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
	
	public function detail_pengumuman($id)
	{
		$data['id']=$id;
		$this->load->view('head');
        $this->load->view('pengumuman/detail_pengumuman',$data);
        $this->load->view('footer');
	}
	
	public function download_pengumuman($file){				
		force_download('dokumen/pengumuman/'.$file.'',NULL);
	}
	
	public function semua_pengumuman()
	{
		$jumlah_data = $this->M_Pengumuman->banyak_pengumuman();
		$config['base_url'] = base_url().'index.php/pengumuman/semua_pengumuman/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		 $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['pengumuman'] = $this->M_Pengumuman->data($config['per_page'],$from);	
		$this->load->view('head');
        $this->load->view('pengumuman/semua_pengumuman',$data);
        $this->load->view('footer');
	}
	
	
	
	function data_pengumuman(){
		$data=$this->M_Pengumuman->semua_pengumuman();
		echo json_encode($data);
	}
}
