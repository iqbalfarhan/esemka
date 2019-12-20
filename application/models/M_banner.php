<?php

/**
 * 
 */
class M_banner extends CI_Model
{

	public function get_all()
	{
		$banners = $this->db->get("tbl_banner");
		return $banners->result();
	}


	public function get_banner()
	{
		$data = [];
		$banners = $this->db->limit(6);
		$banners = $this->db->get("tbl_banner");

		foreach ($banners->result() as $banner) {
			$data[] = [
				'gambar' => $banner->gambar,
				'judul' => $banner->judul,
				'keterangan' => $banner->keterangan,
			];
		}

		return $data;
	}

	public function insert($datainsert)
	{
		$action = $this->db->insert('tbl_banner', $datainsert);

		if ($action) {
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function delete($id)
	{
		$banners = $this->db->where("id", $id);
		$banners = $this->db->delete("tbl_banner");
	}
}