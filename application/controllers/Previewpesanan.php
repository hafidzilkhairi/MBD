<?php

class Previewpesanan extends CI_Controller{
    function index(){
        if(isset($_SESSION['userId'])){
            $this->load->view('template/header');
            $this->load->view('preview');
            $this->load->view('template/footer');
        }
    }
}

?>