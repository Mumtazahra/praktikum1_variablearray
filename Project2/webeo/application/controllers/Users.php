<?php
class Users extends CI_controller{
    public function index(){
        $this->load->model('users_model');
        $users = $this->users_model->getAll();
        $data['users'] = $users;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/index', $data);
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