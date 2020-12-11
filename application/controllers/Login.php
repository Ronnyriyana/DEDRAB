<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_m");
        $this->load->library('form_validation');
        $this->load->library('user_agent');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->login_m->doLogin()){
                //berhasil login
                if($this->session->userdata('level') == "admin"){
                    redirect(site_url('dashboard'));
                }else{
                    if($this->input->post('redirect')){
                        redirect($this->input->post('redirect'));
                    }else{
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }
            }else{
                //gagal login
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            //form tidak terkirim
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('home'));
    }
}