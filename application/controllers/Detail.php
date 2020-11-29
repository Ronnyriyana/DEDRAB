<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("detail_m");
    }
    
	public function index()
	{
        $data = array(
            "title_page" => "Home"
        );
		$this->template->F_Show("halaman/home");  
    }
    
    public function hum($id_desain)
	{
        $data = array(
            "title_page" => "Harga Upah Material",
            "upah" => $this->detail_m->GetUpah($id_desain),
            "material" => $this->detail_m->GetMaterial($id_desain),
            "ded" => $this->detail_m->GetDed($id_desain),
			"id_desain" => $id_desain
        );
		$this->template->F_Show("halaman/rab/hum",$data);  
	}
}
