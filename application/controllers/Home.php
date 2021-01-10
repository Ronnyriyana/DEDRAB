<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
		$this->load->model("home_m");
		if($this->session->has_userdata('user_logged')){
			if($this->session->userdata('level')=="admin"){redirect('dashboard');}
        }
    }
    
	public function index()
	{
		$data = array(
			"title_page" => "Home",
			"proyek" => $this->home_m->GetProyek()
		);
		$this->template->F_Show("halaman/home",$data);  
	}
}
