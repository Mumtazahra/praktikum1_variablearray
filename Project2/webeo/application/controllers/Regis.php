<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Regis extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebarss');
        $this->load->view('regis/index');
        $this->load->view('layout/footer');
    }
    public function proses()
	{
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('created_at', 'created_at','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('role', 'role','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
            $email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $created_at = $this->input->post('created_at');
			$role = $this->input->post('role');
			$this->auth->regis($email,$username,$password,$created_at,$role);
			$this->session->set_flashdata('success_regis','Proses Pendaftaran User Berhasil');
			redirect('login/index');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('regis/index');
		}
	}
    public function submit(){
        $this->session->sess_destroy();
         redirect('login/index');
    }
}
?>