<?php

class Login_m extends CI_Model
{
    private $_table = "akun";

    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('username', $post["username"]);
        $akun = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($akun){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $akun->password);
            // periksa role-nya
            //$isAdmin = $user->role == "admin";

            // jika password benar dan dia admin
            if($isPasswordTrue ){ 
                // login sukses yay!
                $data = array(
                    'user_logged' => $akun,
                    'username' => $akun->username,
                    'level' => $akun->level
                );
                $this->session->set_userdata($data);
                //$this->_updateLastLogin($user->user_id);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

}