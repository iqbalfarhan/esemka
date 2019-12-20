<?php
class Komentar extends CI_Controller{
    function __construct(){
    	parent::__construct();
    	if($this->session->userdata('masuk') !=TRUE){
              $url=base_url('administrator');
              redirect($url);
          };
    	$this->load->model('m_kategori');
        $this->load->model('m_kategori_jurusan');
        $this->load->model('m_kategori_fasilitas');
    }

    function index(){

        $x['data']=$this->db->query("SELECT tbl_komentar.*,tulisan_judul,tulisan_slug FROM tbl_komentar JOIN tbl_tulisan ON komentar_tulisan_id=tulisan_id ORDER BY komentar_id DESC");
         $x['dataa']=$this->db->query("SELECT tbl_komentar.*,jurusan_judul,jurusan_slug FROM tbl_komentar JOIN tbl_jurusan ON komentar_jurusan_id=jurusan_id ORDER BY komentar_id DESC");
         $x['dataaa']=$this->db->query("SELECT tbl_komentar.*,fasilitas_judul,fasilitas_slug FROM tbl_komentar JOIN tbl_fasilitas ON komentar_fasilitas_id=fasilitas_id ORDER BY komentar_id DESC");
        $this->load->view('admin/v_komentar',$x);
    }

    function publish(){
        $kode = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
        $this->db->query("UPDATE tbl_komentar SET komentar_status='1' WHERE komentar_id='$kode'");
        echo $this->session->set_flashdata('msg','success');
        redirect('admin/komentar');
    }

    function reply(){
        $komentar_id = htmlspecialchars($this->input->post('komenid'),ENT_QUOTES);
        $nama = $this->session->userdata('nama');
        $tulisan_id = htmlspecialchars($this->input->post('postid'),ENT_QUOTES);
        $komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
        $data = array(
            'komentar_nama' 			=> $nama,
            'komentar_email' 			=> '',
            'komentar_isi' 				=> $komentar,
            'komentar_status' 		=> 1,
            'komentar_tulisan_id' => $tulisan_id,
            'komentar_parent'     => $komentar_id
        );

        $this->db->insert('tbl_komentar', $data);
        echo $this->session->set_flashdata('msg','info');
        redirect('admin/komentar');
    }

    function hapus(){
  		$kode=$this->input->post('kode');
  		$this->db->delete('tbl_komentar', array('komentar_id' => $kode));
  		echo $this->session->set_flashdata('msg','success-hapus');
  		redirect('admin/komentar');
  	}
}
