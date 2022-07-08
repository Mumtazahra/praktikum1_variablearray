<?php
class Tampil extends CI_controller{
    public function index(){
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getAll();
        $data['kegiatan'] = $kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebars');
        $this->load->view('kegiatan/tampil', $data);
        $this->load->view('layout/footer');
    }
        public function jenis(){
            $this->load->model('jenis_kegiatan_model');
            $jenis_kegiatan = $this->jenis_kegiatan_model->getAll();
            $data['jenis_kegiatan'] = $jenis_kegiatan;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebars');
            $this->load->view('jenis_kegiatan/tampil', $data);
            $this->load->view('layout/footer');
        }
        public function katpes(){
            $this->load->model('kategori_peserta_model');
            $kategori_peserta = $this->kategori_peserta_model->getAll();
            $data['kategori_peserta'] = $kategori_peserta;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebars');
            $this->load->view('kategori_peserta/tampil', $data);
            $this->load->view('layout/footer');
        }
    }
?>