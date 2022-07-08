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
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebarss');
        $this->load->view('kategori_peserta/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model kategori_peserta
        $this->load->model('kategori_peserta_model', 'kategori_peserta'); // 1
        $_nama = $this->input->post('nama');

        $data_kategori_peserta['nama'] = $_nama; // 2

        if((!empty($_idedit))){ //update
            $data_kategori_peserta['id'] = $_idedit;
            $this->kategori_peserta->update($data_kategori_peserta);
        }else{
            //  data baru
            $this->kategori_peserta->simpan($data_kategori_peserta);
        }
        redirect('kategori_peserta','refresh');
    }
    public function edit($id){
        // akses model kategori_peserta
        $this->load->model('kategori_peserta_model','kategori_peserta');
        $obj_kategori_peserta = $this->kategori_peserta->getById($id);
        $data['obj_kategori_peserta'] = $obj_kategori_peserta;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/edit', $data);
        
    }
    public function delete($id){
        $this->load->model('kategori_peserta_model','kategori_peserta');
        // Mengecek data kategori_peserta berdasarkan id
        $data_kategori_peserta['id'] = $id;
        $this->kategori_peserta->delete($data_kategori_peserta);
        redirect('kategori_peserta','refresh');
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