<?php
class Home extends CI_controller{
    public function index (){
        // render view
        $this->load->view('home/index');
    }
}
?>