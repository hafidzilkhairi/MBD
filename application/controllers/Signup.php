<?php
class Signup extends CI_Controller{
    public function __contruct(){
        parent::__contruct();
    }
    public function index(){
        $this->load->view('template/header');
        $this->load->view('v_signup');
        $this->load->view('template/footer');
    }
}
?>