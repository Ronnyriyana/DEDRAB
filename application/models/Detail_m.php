<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_m extends CI_Model {
    public function GetRabUpah($id_desain,$id_kategori_harga)
	{
        $this->db->select("c.nama_upah,a.volume,c.satuan,d.harga,");
        $this->db->select("ROUND((SUM(a.volume * b.koefisien) * d.harga),2) AS jumlah");
        $this->db->join("upah_terpakai b","a.id_pekerjaan = b.id_pekerjaan");
        $this->db->join("upah c","c.id_upah = b.id_upah");
        $this->db->join("harga_upah d","d.id_upah = c.id_upah");
        $this->db->join("kategori_harga e","e.id_kategori_harga = d.id_kategori_harga");
        $this->db->where("a.id_desain",$id_desain);
        $this->db->where("d.id_kategori_harga",$id_kategori_harga);
        $this->db->group_by("d.id_harga_upah");
        $data = $this->db->get("pekerjaan a");
		return $data->result_array();
    }

    public function GetRabMaterial($id_desain,$id_kategori_harga)
	{
        $this->db->select("c.nama_material,a.volume,c.satuan,d.harga,");
        $this->db->select("ROUND((SUM(a.volume * b.koefisien) * d.harga),2) AS jumlah");
        $this->db->join("material_terpakai b","a.id_pekerjaan = b.id_pekerjaan");
        $this->db->join("material c","c.id_material = b.id_material");
        $this->db->join("harga_material d","d.id_material = c.id_material");
        $this->db->join("kategori_harga e","e.id_kategori_harga = d.id_kategori_harga");
        $this->db->where("a.id_desain",$id_desain);
        $this->db->where("d.id_kategori_harga",$id_kategori_harga);
        $this->db->group_by("d.id_harga_material");
        $data = $this->db->get("pekerjaan a");
		return $data->result_array();
    }

    public function GetHargaUpah($id_desain,$id_kategori_harga)
	{
        $this->db->select("DISTINCT(c.nama_upah), c.satuan, d.harga");
        $this->db->join("upah_terpakai b","a.id_pekerjaan = b.id_pekerjaan");
        $this->db->join("upah c","b.id_upah = c.id_upah");
        $this->db->join("harga_upah d","c.id_upah = d.id_upah");
        $this->db->where("a.id_desain",$id_desain);
        $this->db->where("d.id_kategori_harga",$id_kategori_harga);
        $data = $this->db->get("pekerjaan a");
		return $data->result_array();
    }

    public function GetVolumePekerjaan($id_desain)
	{
        $this->db->select("nama_pekerjaan,satuan,volume");
        $this->db->where("id_desain",$id_desain);
        $this->db->order_by("id_pekerjaan");
        $data = $this->db->get("pekerjaan");
		return $data->result_array();
    }

    public function GetPekerjaan($id_desain)
	{
        $this->db->select("a.nama_pekerjaan");
        $this->db->select("(COUNT(DISTINCT c.nama_upah) + COUNT(DISTINCT e.nama_material) + 1) AS rowspan");
        $this->db->select("GROUP_CONCAT(DISTINCT '<tr><td>', c.nama_upah ,'</td><td>', c.satuan ,'</td><td>', b.koefisien ,'</tr>' SEPARATOR '') AS upah");
        $this->db->select("GROUP_CONCAT(DISTINCT '<tr><td>', e.nama_material ,'</td><td>', e.satuan ,'</td><td>', d.koefisien ,'</td></tr>' SEPARATOR '') AS material");
        $this->db->from("pekerjaan a");
        $this->db->join("upah_terpakai b","a.id_pekerjaan = b.id_pekerjaan","LEFT");
        $this->db->join("upah c","b.id_upah = c.id_upah","LEFT");
        $this->db->join("material_terpakai d","d.id_pekerjaan = a.id_pekerjaan","LEFT");
        $this->db->join("material e","e.id_material = d.id_material ","LEFT");
        $this->db->where("a.id_desain",$id_desain);
        $this->db->group_by("a.id_pekerjaan");
        $this->db->order_by("a.id_pekerjaan");
        $data = $this->db->get();
		return $data->result_array();
    }

    public function GetBOQ_material($id_desain)
	{
        $this->db->select("c.nama_material");
        $this->db->select("SUM(a.koefisien * b.volume) AS boq");
        $this->db->join("pekerjaan b","a.id_pekerjaan = b.id_pekerjaan");
        $this->db->join("material c","a.id_material = c.id_material");
        $this->db->where("b.id_desain",$id_desain);
        $this->db->group_by("a.id_material");
        $data = $this->db->get("material_terpakai a");
		return $data->result_array();
    }

    public function GetBOQ_upah($id_desain,$id_kategori)
	{
        $this->db->select("c.nama_upah");
        $this->db->select("SUM(a.koefisien * b.volume) AS boq");
        $this->db->join("pekerjaan b","a.id_pekerjaan = b.id_pekerjaan");
        $this->db->join("upah c","a.id_upah = c.id_upah");
        $this->db->where("b.id_desain",$id_desain);
        $this->db->group_by("a.id_upah");
        $this->db->order_by("c.nama_upah");
        $data = $this->db->get("upah_terpakai a");
		return $data->result_array();
    }
    
    public function GetDed($id_desain)
	{
        $this->db->where("id_desain",$id_desain);
        $data = $this->db->get("ded");
		return $data->result_array();
	}
}
