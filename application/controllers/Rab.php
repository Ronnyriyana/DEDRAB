<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rab extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("rab_m");
    }
    
	public function index()
	{
        $data = array(
            "title_page" => "Home"
        );
		$this->template->isi("halaman/home");  
    }
    
    public function hum($id_desain)
	{
        $data = array(
            "title_page" => "Harga Upah Material",
            "upah" => $this->rab_m->GetUpah($id_desain),
            "material" => $this->rab_m->GetMaterial($id_desain)
        );
		$this->template->isi("halaman/rab/hum",$data);  
	}
}
