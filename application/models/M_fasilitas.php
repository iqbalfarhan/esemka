<?php
class M_fasilitas extends CI_Model{

	function get_all_fasilitas(){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas ORDER BY fasilitas_id DESC");
		return $hsl;
	}
	function simpan_fasilitas($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_fasilitas(fasilitas_judul,fasilitas_isi,fasilitas_kategori_id,fasilitas_kategori_nama,fasilitas_img_slider,fasilitas_pengguna_id,fasilitas_author,fasilitas_gambar,fasilitas_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_fasilitas_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas where fasilitas_id='$kode'");
		return $hsl;
	}
	function update_fasilitas($fasilitas_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_fasilitas set fasilitas_judul='$judul',fasilitas_isi='$isi',fasilitas_kategori_id='$kategori_id',fasilitas_kategori_nama='$kategori_nama',fasilitas_img_slider='$imgslider',fasilitas_pengguna_id='$user_id',fasilitas_author='$user_nama',fasilitas_gambar='$gambar',fasilitas_slug='$slug' where fasilitas_id='$fasilitas_id'");
		return $hsl;
	}
	function update_fasilitas_tanpa_img($fasilitas_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_fasilitas set fasilitas_judul='$judul',fasilitas_isi='$isi',fasilitas_kategori_id='$kategori_id',fasilitas_kategori_nama='$kategori_nama',fasilitas_img_slider='$imgslider',fasilitas_pengguna_id='$user_id',fasilitas_author='$user_nama',fasilitas_slug='$slug' where fasilitas_id='$fasilitas_id'");
		return $hsl;
	}
	function hapus_fasilitas($kode){
		$hsl=$this->db->query("delete from tbl_fasilitas where fasilitas_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_berita_slider(){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas where fasilitas_img_slider='1' ORDER BY fasilitas_id DESC");
		return $hsl;
	}
	function get_berita_home(){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas ORDER BY fasilitas_id DESC limit 4");
		return $hsl;
	}

	function berita_perpage_fasilitas($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas ORDER BY fasilitas_id DESC limit $offset,$limit");
		return $hsl;
	}

	function berita_fasilitas(){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas ORDER BY fasilitas_id DESC");
		return $hsl;
	}
	function get_berita_fasilitas_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas where fasilitas_id='$kode'");
		return $hsl;
	}

	function cari_fasilitas($keyword){
		$hsl=$this->db->query("SELECT tbl_fasilitas.*,DATE_FORMAT(fasilitas_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_fasilitas WHERE fasilitas_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_fasilitas_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_fasilitas_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
