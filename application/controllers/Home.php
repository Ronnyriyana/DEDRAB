<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
}
