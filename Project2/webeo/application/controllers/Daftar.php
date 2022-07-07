<?php
class Daftar extends CI_controller{
    public function index(){
        $this->load->model('daftar_model');
        $daftar = $this->daftar_model->getAll();
        $data['daftar'] = $daftar;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/index', $data);
        $this->load->view('layout/footer');
    }
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebarss');
        $this->load->view('daftar/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model daftar
        $this->load->model('daftar_model', 'daftar'); // 1
        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post ('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');

        $data_daftar['tanggal_daftar'] = $_tanggal_daftar; // 2
        $data_daftar['alasan'] = $_alasan;
        $data_daftar['users_id'] = $_users_id;
        $data_daftar['kegiatan_id'] = $_kegiatan_id;
        $data_daftar['kategori_peserta_id'] = $_kategori_peserta_id;
        $data_daftar['nosertifikat'] = $_nosertifikat;

        if((!empty($_idedit))){ //update
            $data_daftar['id'] = $_idedit;
            $this->daftar->update($data_daftar);
        }else{
            //  data baru
            $this->daftar->simpan($data_daftar);
        }
        redirect('daftar','refresh');
    }
    public function edit($id){
        // akses model daftar
        $this->load->model('daftar_model','daftar');
        $obj_daftar = $this->daftar->getById($id);
        $data['obj_daftar'] = $obj_daftar;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/edit', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('daftar_model','daftar');
        // Mengecek data daftar berdasarkan id
        $data_daftar['id'] = $id;
        $this->daftar->delete($data_daftar);
        redirect('daftar','refresh');
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