<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_harga_upah extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("dashboard_harga_upah_m","A");
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
            "title_page" => "Harga Upah",
            "kategori_harga" => $this->A->GetKategoriHarga(),
            "harga_upah" => $this->A->getHargaUpah($id_kategori_harga)
        );
        $this->template->B_Show("dashboard/harga_upah/daftar_harga_upah",$data);
    }
}
