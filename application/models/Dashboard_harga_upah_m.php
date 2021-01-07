<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_harga_upah_m extends CI_Model {
    public function GetKategoriHarga()
	{
        $data = $this->db->get("kategori_harga");
		return $data->result_array();
    }
    
    public function getHargaUpah($id_kategori_harga)
	{
        $this->db->select("a.id_upah, a.nama_upah, a.satuan, b.harga");
        $this->db->from("upah a");
        $this->db->join("harga_upah b","a.id_upah = b.id_upah");
        $this->db->where("b.id_kategori_harga",$id_kategori_harga);
        $data = $this->db->get();
		return $data->result_array();
    }
}
