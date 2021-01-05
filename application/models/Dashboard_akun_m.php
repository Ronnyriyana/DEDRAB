<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_akun_m extends CI_Model {
    public function getAkun()
	{
        $this->db->where("level!=","admin");
        $data = $this->db->get("akun");
		return $data->result_array();
    }
}
