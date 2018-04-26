<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('template/header.php');
        $this->load->view('v_home');
        $this->load->view('template/footer.php');
    }
}
?>