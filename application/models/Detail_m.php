<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_m extends CI_Model {
    public function GetBOQ_material($id_desain,$id_kategori)
	{
        $this->db->select("SUM(ROUND((a.volume * b.koefisien),3)) AS boq,c.nama_material,
        ROUND((SUM(ROUND((a.volume * b.koefisien),3)) * d.harga),3) AS rab");
        $this->db->from("pekerjaan a");
        $this->db->join("material_terpakai b","a.id_pekerjaan = b.id_pekerjaan");
        $this->db->join("material c","c.id_material = b.id_material");
        $this->db->join("harga_material d","d.id_material = c.id_material");
        $this->db->join("kategori_harga e","e.id_kategori_harga = d.id_kategori_harga");
        $this->db->where("a.id_desain",$id_desain);
        $this->db->where("e.id_kategori_harga",$id_kategori);
        $this->db->group_by("d.id_harga_material");
        $data = $this->db->get();
		return $data->result_array();
    }

    public function GetBOQ_upah($id_desain,$id_kategori)
	{
        $this->db->select("SUM(ROUND((a.volume * b.koefisien),3)) AS boq,c.nama_upah,
        ROUND((SUM(ROUND((a.volume * b.koefisien),3)) * d.harga),3) AS rab");
        $this->db->from("pekerjaan a");
        $this->db->join("upah_terpakai b","a.id_pekerjaan = b.id_pekerjaan");
        $this->db->join("upah c","c.id_upah = b.id_upah");
        $this->db->join("harga_upah d","d.id_upah = c.id_upah");
        $this->db->join("kategori_harga e","e.id_kategori_harga = d.id_kategori_harga");
        $this->db->where("a.id_desain",$id_desain);
        $this->db->where("e.id_kategori_harga",$id_kategori);
        $this->db->group_by("d.id_harga_upah");
        $data = $this->db->get();
		return $data->result_array();
    }
    
    public function GetDed($id_desain)
	{
        $this->db->where("id_desain",$id_desain);
        $data = $this->db->get("ded");
		return $data->result_array();
	}
}
