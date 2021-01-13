<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_akun_m extends CI_Model {
    public function getAkun()
	{
        $this->db->where("level!=","admin");
        $data = $this->db->get("akun");
		return $data->result_array();
    }

    function inputAkun($data){
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['level'] = "kuwu";
		$res = $this->db->insert("akun",$data);
		return $res;
    }
    
    public function get_by_id($id)
    {
        $this->db->where("id_akun",$id);
        $query = $this->db->get("akun");
 
        return $query->row();
    }

    public function update($data)
    {
        $this->db->update("akun", $data, $data['id_akun']);
        return $this->db->affected_rows();
    }
}
