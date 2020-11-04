<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rab_m extends CI_Model {
    public function GetUpah($id_desain)
	{
        $this->db->from("harga_upah_material a");
        $this->db->join('upah_material_terpakai b', 'a.id_hum = b.id_hum');
        $this->db->where("b.id_desain",$id_desain);
        $this->db->where("a.jenis","upah");
        $data = $this->db->get("upah_material_terpakai");
		return $data->result_array();
    }
    
    public function GetMaterial($id_desain)
	{
        $this->db->from("harga_upah_material a");
        $this->db->join('upah_material_terpakai b', 'a.id_hum = b.id_hum');
        $this->db->where("b.id_desain",$id_desain);
        $this->db->where("a.jenis","material");
        $data = $this->db->get("upah_material_terpakai");
		return $data->result_array();
	}
}
