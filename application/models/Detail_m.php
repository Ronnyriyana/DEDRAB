<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_m extends CI_Model {
    public function GetUpah($id_desain)
	{
        $data = $this->db->get("upah_material_terpakai");
		return $data->result_array();
    }
    
    public function GetMaterial($id_desain)
	{
        $data = $this->db->get("upah_material_terpakai");
		return $data->result_array();
    }
    
    public function GetDed($id_desain)
	{
        $this->db->where("id_desain",$id_desain);
        $data = $this->db->get("ded");
		return $data->result_array();
	}
}
