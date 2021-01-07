<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_harga_material_m extends CI_Model {
    public function GetKategoriHarga()
	{
        $data = $this->db->get("kategori_harga");
		return $data->result_array();
    }
    
    public function getHargaMaterial($id_kategori_harga)
	{
        $this->db->select("a.id_material, a.nama_material, a.satuan, b.harga");
        $this->db->from("material a");
        $this->db->join("harga_material b","a.id_material = b.id_material");
        $this->db->where("b.id_kategori_harga",$id_kategori_harga);
        $data = $this->db->get();
		return $data->result_array();
    }
}
