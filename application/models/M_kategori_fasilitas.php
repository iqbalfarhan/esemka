<?php
class M_kategori_fasilitas extends CI_Model{

	function get_all_kategori(){
		$hsl=$this->db->query("select * from tbl_kategori_fasilitas");
		return $hsl;
	}
	function simpan_kategori_fasilitas($kategori){
		$hsl=$this->db->query("insert into tbl_kategori_fasilitas(kategori_nama) values('$kategori')");
		return $hsl;
	}
	function update_kategori_fasilitas($kode,$kategori){
		$hsl=$this->db->query("update tbl_kategori_fasilitas set kategori_nama='$kategori' where kategori_id='$kode'");
		return $hsl;
	}
	function hapus_kategori_fasilitas($kode){
		$hsl=$this->db->query("delete from tbl_kategori_fasilitas where kategori_id='$kode'");
		return $hsl;
	}
	
	function get_kategori_byid($kategori_id){
		$hsl=$this->db->query("select * from tbl_kategori_fasilitas where kategori_id='$kategori_id'");
		return $hsl;
	}

}