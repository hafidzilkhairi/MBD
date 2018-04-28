<?php
class Aboutus extends CI_Controller{
    public function index(){
        if(isset($_SESSION['userId'])){
            $this->load->view('template/header');
            $this->load->view('v_aboutus');
            $this->load->view('template/footer');
        }else{
            redirect($this->config->base_url());
        }
    }
}
?>