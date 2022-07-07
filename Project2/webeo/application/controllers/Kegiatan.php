<?php
class Kegiatan extends CI_controller{
    public function index(){
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getAll();
        $data['kegiatan'] = $kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/index', $data);
        $this->load->view('layout/footer');
    }
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model kegiatan
        $this->load->model('kegiatan_model', 'kegiatan'); // 1
        $_judul = $this->input->post('judul');
        $_kapasitas = $this->input->post('kapasitas');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_tanggal = $this->input->post('tanggal');
        $_narasumber = $this->input->post ('narasumber');
        $_tempat = $this->input->post('tempat');
        $_pic = $this->input->post('pic');
        $_foto_flyer = $this->input->post('foto_flyer');
        $_jenis_id = $this->input->post('jenis_id');

        $data_kegiatan['judul'] = $_judul; // 2
        $data_kegiatan['kapasitas'] = $_kapasitas;
        $data_kegiatan['harga_tiket'] = $_harga_tiket;
        $data_kegiatan['tanggal'] = $_tanggal;
        $data_kegiatan['narasumber'] = $_narasumber;
        $data_kegiatan['tempat'] = $_tempat;
        $data_kegiatan['pic'] = $_pic;
        $data_kegiatan['foto_flyer'] = $_foto_flyer;
        $data_kegiatan['jenis_id'] = $_jenis_id;

        if((!empty($_idedit))){ //update
            $data_kegiatan['id'] = $_idedit;
            $this->kegiatan->update($data_kegiatan);
        }else{
            //  data baru
            $this->kegiatan->simpan($data_kegiatan);
        }
        redirect('kegiatan','refresh');
    }
    public function edit($id){
        // akses model kegiatan
        $this->load->model('kegiatan_model','kegiatan');
        $obj_kegiatan = $this->kegiatan->getById($id);
        $data['obj_kegiatan'] = $obj_kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/edit', $data);
        // $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('kegiatan_model','kegiatan');
        // Mengecek data kegiatan berdasarkan id
        $data_kegiatan['id'] = $id;
        $this->kegiatan->delete($data_kegiatan);
        redirect('kegiatan','refresh');
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