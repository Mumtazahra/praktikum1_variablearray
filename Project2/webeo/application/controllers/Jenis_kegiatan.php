<?php
class Jenis_kegiatan extends CI_controller{
    public function index(){
        $this->load->model('jenis_kegiatan_model');
        $jenis_kegiatan = $this->jenis_kegiatan_model->getAll();
        $data['jenis_kegiatan'] = $jenis_kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/index', $data);
        $this->load->view('layout/footer');
    }
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model jenis_kegiatan
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan'); // 1
        $_nama = $this->input->post('nama');
        $data_jenis_kegiatan['nama'] = $_nama;

        if((!empty($_idedit))){ //update
            $data_jenis_kegiatan['id'] = $_idedit;
            $this->jenis_kegiatan->update($data_jenis_kegiatan);
        }else{
            //  data baru
            $this->jenis_kegiatan->simpan($data_jenis_kegiatan);
        }
        redirect('jenis_kegiatan','refresh');
    }
    public function edit($id){
        // akses model jenis_kegiatan
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');
        $obj_jenis_kegiatan = $this->jenis_kegiatan->getById($id);
        $data['obj_jenis_kegiatan'] = $obj_jenis_kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/edit', $data);
        // $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');
        // Mengecek data jenis_kegiatan berdasarkan id
        $data_jenis_kegiatan['id'] = $id;
        $this->jenis_kegiatan->delete($data_jenis_kegiatan);
        redirect('jenis_kegiatan','refresh');
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