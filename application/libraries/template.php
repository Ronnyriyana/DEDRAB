<?php
class Template{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }

    function F_Show($content, $data = NULL){
        $data['header'] = $this->_ci->load->view('kerangka/header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('kerangka/footer', $data, TRUE);

        $this->_ci->load->view('kerangka/kerangka', $data);
    }

    function B_Show($konten, $data = NULL){
        $data['topbar'] = $this->_ci->load->view('dashboard/kerangka/topbar', $data, TRUE);
        $data['sidebar'] = $this->_ci->load->view('dashboard/kerangka/sidebar', $data, TRUE);
        $data['konten'] = $this->_ci->load->view($konten, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('dashboard/kerangka/footer', $data, TRUE);

        $this->_ci->load->view('dashboard/kerangka/kerangka', $data);
    }
}

