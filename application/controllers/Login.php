<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_m");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->login_m->doLogin()){
                if($this->session->userdata('level') == "admin"){
                    redirect(site_url('dashboard'));
                }else{
                    redirect(site_url('home'));
                }
            }
        }

        // tampilkan halaman login
        ECHO $this->input->post();
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('home'));
    }
}