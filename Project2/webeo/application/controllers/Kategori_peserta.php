<?php
class Kategori_peserta extends CI_controller{
    public function index(){
        $this->load->model('kategori_peserta_model');
        $kategori_peserta = $this->kategori_peserta_model->getAll();
        $data['kategori_peserta'] = $kategori_peserta;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/index', $data);
        $this->load->view('layout/footer');
    }
    public function __construct()
    {
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }
}
?>