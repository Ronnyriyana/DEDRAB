<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desain extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("desain_m");
    }
    
	public function index()
	{
        redirect("Home");
    }
    
    public function pilih_desain()
	{
        if(null == $this->input->post("proyek")){ redirect("home"); }
        $proyek = $this->desain_m->GetNamaProyek($this->input->post("proyek"));
        foreach($proyek as $data){
            $nama_proyek = $data['nama_proyek'];
        }
        $data = array(
            "title_page" => "Desain",
            "proyek" => $nama_proyek,
            "desain" => $this->desain_m->GetDesain($this->input->post("proyek"))
        );
		$this->template->isi("halaman/desain",$data);  
	}
}
