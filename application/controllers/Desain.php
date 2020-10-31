<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desain extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
    }
    
	public function index()
	{
        $data = array(
            "title_page" => "Home"
        );
		$this->template->isi("halaman/home");  
    }
    
    public function pilih_desain()
	{
        $data = array(
            "title_page" => "Home",
            "ini" => $this->input->post(null, true)
        );
		$this->template->isi("halaman/desain",$data);  
	}
}
