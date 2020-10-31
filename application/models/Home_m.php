<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {
    public function GetProyek()
	{
        $data = $this->db->get("proyek");
		return $data->result_array();
	}
}
