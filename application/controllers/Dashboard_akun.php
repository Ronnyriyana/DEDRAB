<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_akun extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("dashboard_akun_m","A");
        if(!$this->session->has_userdata('user_logged')){
            redirect('home');
        }
    }
    
	public function index(){
        $data = array(
            "title_page" => "Akun",
            "akun" => $this->A->getAkun()
        );
        $this->template->B_Show("dashboard/akun/daftar_akun",$data);
    }
    
    public function tambahAkun(){
        $data = $this->input->post(null, true);
        $query = $this->A->inputAkun($data);
        if($query){
            $this->session->set_flashdata("berhasil","Data berhasil ditambahkan.");
            redirect('Dashboard_akun');
		}else{
			$this->session->set_flashdata("gagal","Data tidak ditambahkan.");
            redirect('Dashboard_akun');
		}
    }
}
