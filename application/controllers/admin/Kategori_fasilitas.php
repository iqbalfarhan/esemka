<?php
class Kategori_fasilitas extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori_fasilitas');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kategori_fasilitas->get_all_kategori();
		$this->load->view('admin/v_kategori_fasilitas',$x);
	}

	function simpan_kategori(){
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_kategori_fasilitas->simpan_kategori_fasilitas($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kategori_fasilitas');
	}

	function update_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_kategori_fasilitas->update_kategori_fasilitas($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/Kategori_fasilitas');
	}
	function hapus_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kategori_fasilitas->hapus_kategori_fasilitas($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/Kategori_fasilitas');
	}

}
