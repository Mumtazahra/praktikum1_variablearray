<?php
class webeo extends CI_Controller{
    public function index(){
        $data ['nama'] = "CodeIgniter 3";
        $this ->load->view("webeo/index", $data);
    }
    public function add(){
       $this->load->view("webeo/add");
    }
}
?>