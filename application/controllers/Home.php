<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("home_m");
    }
    
	public function index()
	{
		$data = array(
			"title_page" => "Home",
			"proyek" => $this->home_m->GetProyek()
		);
		$this->template->isi("halaman/home",$data);  
	}
}
