<?php
class M_album extends CI_Model{

	function get_all_album(){
		$hsl=$this->db->query("SELECT tbl_album.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album ORDER BY album_id DESC");
		return $hsl;
	}
	function simpan_album($album,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_album(album_nama,album_pengguna_id,album_author,album_cover,album_slug) values ('$album','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}
	function update_album($album_id,$album_nama,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_album set album_nama='$album_nama',album_pengguna_id='$user_id',album_author='$user_nama',album_cover='$gambar',album_slug='$slug' where album_id='$album_id'");
		return $hsl;
	}
	function update_album_tanpa_img($album_id,$album_nama,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_album set album_nama='$album_nama',album_pengguna_id='$user_id',album_author='$user_nama',album_slug='$slug' where album_id='$album_id'");
		return $hsl;
	}
	function hapus_album($kode){
		$hsl=$this->db->query("delete from tbl_album where album_id='$kode'");
		return $hsl;
	}
	function get_berita_album_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_album.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album where album_id='$kode'");
		return $hsl;
	}

	function berita_album(){
		$hsl=$this->db->query("SELECT tbl_album.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album ORDER BY album_id DESC");
		return $hsl;
	}
	function berita_perpagee($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_album.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album ORDER BY album_id DESC limit $offset,$limit");
		return $hsl;
	}

	function cari_album($keyword){
		$hsl=$this->db->query("SELECT tbl_album.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album WHERE album_nama LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}
	

}