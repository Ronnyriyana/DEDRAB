<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_akun extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("dashboard_akun_m","A");
    }
    
	public function index(){
        $data = array(
            "title_page" => "Akun",
            "akun" => $this->A->getAkun()
        );
        $this->template->B_Show("dashboard/akun/daftar_akun",$data);
    }
    
    public function edit(){
        $data = $this->input->post(null, true);
        
        $query = $this->A->editAkun($data);
        if($query){
            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Dashboard_akun');
		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data gagal diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Dashboard_akun');
		}
    }
}
