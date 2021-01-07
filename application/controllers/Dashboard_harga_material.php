<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_harga_Material extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("dashboard_harga_material_m","A");
        if(!$this->session->has_userdata('user_logged')){
            redirect('home');
        }
    }
    
	public function index(){
        if(null !== $this->input->get("kategori_harga")){ 
            $id_kategori_harga = $this->input->get("kategori_harga"); 
            $this->session->set_userdata("id_kategori_harga",$id_kategori_harga);
        }else{
            $id_kategori_harga = 1;
            $this->session->set_userdata("id_kategori_harga",$id_kategori_harga);
        }
        $data = array(
            "title_page" => "Harga Material",
            "kategori_harga" => $this->A->GetKategoriHarga(),
            "harga_material" => $this->A->getHargaMaterial($id_kategori_harga)
        );
        $this->template->B_Show("dashboard/harga_Material/daftar_harga_material",$data);
    }
}
