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
    public function form(){
        // render view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebarss');
        $this->load->view('users/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model users
        $this->load->model('users_model', 'users'); // 1
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post ('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');

        $data_users['username'] = $_username; // 2
        $data_users['password'] = $_password;
        $data_users['email'] = $_email;
        $data_users['created_at	'] = $_created_at	;
        $data_users['last_login'] = $_last_login;
        $data_users['status'] = $_status;
        $data_users['role'] = $_role;

        if((!empty($_idedit))){ //update
            $data_users['id'] = $_idedit;
            $this->users->update($data_users);
        }else{
            //  data baru
            $this->users->simpan($data_users);
        }
        redirect('users','refresh');
    }
    public function edit($id){
        // akses model users
        $this->load->model('users_model','users');
        $obj_users = $this->users->getById($id);
        $data['obj_users'] = $obj_users;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/edit', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('users_model','users');
        // Mengecek data users berdasarkan id
        $data_users['id'] = $id;
        $this->users->delete($data_users);
        redirect('users','refresh');
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