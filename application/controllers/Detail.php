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
    
    public function hum($id_desain,$kategori_harga = 1)
	{
        /*if(isset($kategori_harga) == null){
            $kategori_harga = 1 ;
        }*/
        $data = array(
            "title_page" => "Harga Upah Material",
            "boq_upah" => $this->detail_m->GetBOQ_upah($id_desain,$kategori_harga),
            "boq_material" => $this->detail_m->GetBOQ_material($id_desain,$kategori_harga),
            "ded" => $this->detail_m->GetDed($id_desain),
			"id_desain" => $id_desain
        );
		$this->template->F_Show("halaman/detail/hum",$data);  
	}
}
