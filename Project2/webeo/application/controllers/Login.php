<?php
class Login extends CI_Controller{
    public function index(){ 
        
        $this->load->view('login/index');
    }
    public function auth(){
        // mengambil data yang telah di input di form login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == 'admin' && $password == 'admin'){
            $userdata = [
                "username" => $username,
                "logged_in" => TRUE,
    
            ];
            $this->session->set_userdata($userdata);
            redirect('/daftar');
            redirect('/jenis_kegiatan');
            redirect('/kategori_peserta');
            redirect('/kegiatan');
            redirect('/users');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
         redirect('/login');
    }
}
?>