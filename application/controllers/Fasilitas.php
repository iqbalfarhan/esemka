<?php
class Fasilitas extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_fasilitas');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum=$this->m_fasilitas->berita_fasilitas();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=5;
        $config['base_url'] = base_url() . 'fasilitas/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_fasilitas->berita_perpage_fasilitas($offset,$limit);
						$x['category']=$this->db->get('tbl_kategori_fasilitas');
						$x['populer']=$this->db->query("SELECT * FROM tbl_fasilitas ORDER BY fasilitas_views DESC LIMIT 5");
						$this->load->template('depan/v_fasilitas',$x);
	}

	function detail($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_fasilitas', array('fasilitas_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['fasilitas_id'];
			$this->db->query("UPDATE tbl_fasilitas SET fasilitas_views=fasilitas_views+1 WHERE fasilitas_id='$kode'");
			$data=$this->m_fasilitas->get_berita_fasilitas_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['fasilitas_id'];
			$x['title']=$row['fasilitas_judul'];
			$x['image']=$row['fasilitas_gambar'];
			$x['blog'] =$row['fasilitas_isi'];
			$x['tanggal']=$row['tanggal'];
			$x['author']=$row['fasilitas_author'];
			$x['kategori']=$row['fasilitas_kategori_nama'];
			$x['slug']=$row['fasilitas_slug'];
			$x['show_komentar']=$this->m_fasilitas->show_komentar_by_fasilitas_id($kode);
			$x['category']=$this->db->get('tbl_kategori_fasilitas');
			$x['populer']=$this->db->query("SELECT * FROM tbl_fasilitas ORDER BY fasilitas_views DESC LIMIT 5");
			$this->load->template('depan/v_fasilitas_detail',$x);
		}else{
			redirect('sekolah');
		}
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas WHERE fasilitas_kategori_nama LIKE '%$kategori%' ORDER BY fasilitas_views DESC LIMIT 5");
		 if($query->num_rows() > 0){
			 $x['data']=$query;
			 $x['category']=$this->db->get('tbl_kategori_fasilitas');
 			 $x['populer']=$this->db->query("SELECT * FROM tbl_fasilitas ORDER BY fasilitas_views DESC LIMIT 5");
			 $this->load->template('depan/v_fasilitas',$x);
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('sekolah');
		 }
	}

    function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_fasilitas->cari_fasilitas($keyword);
				if($query->num_rows() > 0){
					$x['data']=$query;
					$x['category']=$this->db->get('tbl_kategori_fasilitas');
  				$x['populer']=$this->db->query("SELECT * FROM tbl_fasilitas ORDER BY fasilitas_views DESC LIMIT 5");
          $this->load->template('depan/v_fasilitas',$x);
	 		 }else{
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('sekolah');
			 }
    }

		function komentar(){
				$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
				$data=$this->m_fasilitas->get_berita_fasilitas_by_kode($kode);
				$row=$data->row_array();
				$slug=$row['fasilitas_slug'];
				$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
				$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
				$komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
				if(empty($nama) || empty($email)){
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
					redirect('informasi/'.$slug);
				}else{
					$data = array(
			        'komentar_nama' 			=> $nama,
			        'komentar_email' 			=> $email,
			        'komentar_isi' 				=> $komentar,
							'komentar_status' 		=> 0,
							'komentar_fasilitas_id' => $kode
					);

					$this->db->insert('tbl_komentar', $data);
					$this->session->set_flashdata('msg','<div class="alert alert-info">Komentar Andah telah terkirim.</div>');
					redirect('sekolah/'.$slug);
				}
		}

}
