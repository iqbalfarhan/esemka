<?php

/**
 * 
 */
class Banner extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_banner');
	}
	
	public function index()
	{
		$data = [
			'banner' => $this->M_banner->get_all()
		];
		$this->load->view('admin/v_banner', $data);
	}

	public function upload()
	{
		$config['upload_path']          = './theme/images/';
		$config['allowed_types']        = 'gif|jpg|png';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}else{
			$data = array('upload_data' => $this->upload->data());

			$datainsert = array(
				'gambar' => $data['upload_data']['file_name'],
				'judul' => $this->input->post('judul'),
				'keterangan' => $this->input->post('keterangan'),
			);
			
			$this->M_banner->insert($datainsert);

			redirect(base_url('admin/banner'));
		}
	}

	public function delete($id)
	{
		$banners = $this->db->where("id", $id);
		$banners = $this->db->get("tbl_banner");

		$gambar = $banners->row()->gambar;

		if(unlink(APPPATH."../theme/images/".$gambar)){
			$this->M_banner->delete($id);
		}

		
		redirect(base_url('admin/banner'));
	}
}