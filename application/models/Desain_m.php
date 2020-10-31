<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desain_m extends CI_Model {
    public function GetDesain($id_proyek)
	{
        $this->db->where("id_proyek",$id_proyek);
        $data = $this->db->get("desain");
		return $data->result_array();
	}
}
