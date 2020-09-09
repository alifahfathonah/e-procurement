<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang extends CI_Controller {

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
	{	if($this->session->userdata('logged_in')==TRUE) redirect('user/index');
		$this->load->view('head');
        $this->load->view('home-login');
        $this->load->view('footer');
	}
	
	public function cek_penawaran(){
		$result = $this->M_Lelang->cek_penawaran();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	
	public function cek_penawaran2(){
		$result = $this->M_Lelang->cek_penawaran();
		
		echo json_encode($result);
	}
	
	public function cek_pemenang_lelang(){
		$result = $this->M_Lelang->cek_pemenang_lelang();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	
	public function cek_id_tahapan_lelang(){
		$result = $this->M_Lelang->cek_id_tahapan_lelang();
		echo json_encode($result);
	}
	
	public function cek_tahapan_lelang(){
		$id = $this->input->get('no');
		$result = $this->M_Lelang->cek_tahapan_lelang($id);
		echo json_encode($result);
	}
	
	public function detail_lelang(){
		$result = $this->M_Lelang->detail_lelang();
		echo json_encode($result);
	}
	
	public function download_persyaratan($file){				
		force_download('dokumen/lelang/'.$file.'',NULL);
	}
	
	public function download_dokumen_penawaran($file){				
		force_download('dokumen/penawaran-lelang/'.$file.'',NULL);
	}
	
	public function edit_penawaran(){
		$pend=$this->input->post('pend');
		$this->db->where('NoPendaftaran',$pend);
		 $query = $this->db->get('rekanan_tahapan_lelang');
		 $row = $query->row();

		unlink("./dokumen/penawaran-lelang/$row->dokRekanan");
		$config['upload_path'] = 'dokumen/penawaran-lelang/';
		$config['allowed_types'] = 'zip';
		$config['max_size'] = 3000;

		$this->load->library('upload',$config);
	    if ( $this->upload->do_upload("dokumen_penawaran")) //sesuai dengan name pada form 
		{
			$data = array('upload_data' => $this->upload->data());

	        $penawaran= $this->input->post('penawaran');
	        $nama_file= $data['upload_data']['file_name']; 
	        
	        $result= $this->M_Lelang->edit_penawaran($penawaran,$nama_file);
	        echo json_decode($result);
		}
		

	}
	
	public function jenis_tahapan(){
		$result = $this->M_Lelang->jenis_tahapan();
		echo json_encode($result);
	}
	
	public function lelang_perjenis($id)
	{
		$jumlah_data = $this->M_Lelang->banyak_lelang_perjenis($id);
		$config['base_url'] = base_url().'index.php/lelang/lelang_perjenis/'.$id.'/';
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
        
		$start = $this->uri->segment(4)!=null?$this->uri->segment(4):0; 
		$this->pagination->initialize($config);		
		$data['lelang'] = $this->M_Lelang->data_perjenis($config['per_page'],$start,$id);
		$data['start'] = $start;
		$data['total_rows'] = $jumlah_data;	
		$data['id']=$id;	
		$this->load->view('head');
        $this->load->view('lelang/lelang_perjenis',$data);
        $this->load->view('footer');
	}
	
	public function pemenang_lelang(){
		$result = $this->M_Lelang->pemenang_lelang();
		
		echo json_encode($result);
	}
	
	public function semua_lelang()
	{
		$jumlah_data = $this->M_Lelang->banyak_lelang2();
		$config['base_url'] = base_url().'index.php/lelang/semua_lelang/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
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
        
		$start = $this->uri->segment(3)!=null?$this->uri->segment(3):0; 
		$this->pagination->initialize($config);		
		$data['lelang'] = $this->M_Lelang->data($config['per_page'],$start);
		$data['start'] = $start;
		$data['total_rows'] = $jumlah_data;	
	
		$this->load->view('head');
        $this->load->view('lelang/semua_lelang',$data);
        $this->load->view('footer');
	}
	
	public function histori_penawaran()
	{
		$jumlah_data = $this->M_Lelang->banyak_penawaran();
		$config['base_url'] = base_url().'index.php/lelang/histori_penawaran/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
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
        
		$start = $this->uri->segment(3)!=null?$this->uri->segment(3):0; 
		$this->pagination->initialize($config);		
		$data['lelang'] = $this->M_Lelang->data_histori($config['per_page'],$start);
		$data['start'] = $start;
		$data['total_rows'] = $jumlah_data;	
	
		$this->load->view('head');
        $this->load->view('lelang/histori_penawaran',$data);
        $this->load->view('footer');
	}
	
	public function semua_lelang2()
	{
		$result = $this->M_Lelang->lelang_perjenis3();
		echo json_encode($result);
	}
	
	public function simpan_penawaran(){
		$config['upload_path'] = 'dokumen/penawaran-lelang/';
		$config['allowed_types'] = 'zip';
		$config['max_size'] = 3000;

		$this->load->library('upload',$config);
	    if ( $this->upload->do_upload("dokumen_penawaran")) //sesuai dengan name pada form 
		{
			$data = array('upload_data' => $this->upload->data());

	        $penawaran= $this->input->post('penawaran');
	        $nama_file= $data['upload_data']['file_name']; 
	        
	        $result= $this->M_Lelang->simpan_penawaran($penawaran,$nama_file);
	        echo json_decode($result);
		}
		

	}
	
	public function simpan_lelang(){
		$config['upload_path'] = 'dokumen/lelang/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 3000;

		$this->load->library('upload',$config);
	    if ( $this->upload->do_upload("dokumen_lelang")) //sesuai dengan name pada form 
		{
			$data = array('upload_data' => $this->upload->data());

	        $jenis_lelang= $this->input->post('jenis_lelang');
	        $nama_file= $data['upload_data']['file_name']; 
	        
	        $result= $this->M_Lelang->simpan_lelang($jenis_lelang,$nama_file);
	        echo json_decode($result);
		}
		

	}
	
	public function tahapan_lelang(){
	$result = $this->M_Lelang->tahapan_lelang();
		echo json_encode($result);
	}
	
	public function tampil_pengumuman(){
		$data['id'] = $_POST['id'];
        $template_konten = 'pengumuman/modal_pengumuman';
        echo $this->load->view($template_konten, $data, true);
	}
	
	
		
}
