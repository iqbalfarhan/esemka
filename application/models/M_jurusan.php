<?php
class M_jurusan extends CI_Model{

	function get_all_jurusan(){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan ORDER BY jurusan_id DESC");
		return $hsl;
	}
	function simpan_jurusan($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_jurusan(jurusan_judul,jurusan_isi,jurusan_kategori_id,jurusan_kategori_nama,jurusan_img_slider,jurusan_pengguna_id,jurusan_author,jurusan_gambar,jurusan_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_jurusan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan where jurusan_id='$kode'");
		return $hsl;
	}
	function update_jurusan($jurusan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_jurusan set jurusan_judul='$judul',jurusan_isi='$isi',jurusan_kategori_id='$kategori_id',jurusan_kategori_nama='$kategori_nama',jurusan_img_slider='$imgslider',jurusan_pengguna_id='$user_id',jurusan_author='$user_nama',jurusan_gambar='$gambar',jurusan_slug='$slug' where jurusan_id='$jurusan_id'");
		return $hsl;
	}
	function update_jurusan_tanpa_img($jurusan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_jurusan set jurusan_judul='$judul',jurusan_isi='$isi',jurusan_kategori_id='$kategori_id',jurusan_kategori_nama='$kategori_nama',jurusan_img_slider='$imgslider',jurusan_pengguna_id='$user_id',jurusan_author='$user_nama',jurusan_slug='$slug' where jurusan_id='$jurusan_id'");
		return $hsl;
	}
	function hapus_jurusan($kode){
		$hsl=$this->db->query("delete from tbl_jurusan where jurusan_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_berita_slider(){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan where jurusan_img_slider='1' ORDER BY jurusan_id DESC");
		return $hsl;
	}
	function get_berita_home(){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan ORDER BY jurusan_id DESC limit 4");
		return $hsl;
	}

	function berita_perpagee($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan ORDER BY jurusan_id DESC limit $offset,$limit");
		return $hsl;
	}

	function berita_jurusan(){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan ORDER BY jurusan_id DESC");
		return $hsl;
	}
	function get_berita_jurusan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan where jurusan_id='$kode'");
		return $hsl;
	}

	function cari_jurusan($keyword){
		$hsl=$this->db->query("SELECT tbl_jurusan.*,DATE_FORMAT(jurusan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jurusan WHERE jurusan_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_jurusan_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_jurusan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
