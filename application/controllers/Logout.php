<?php
class Logout extends CI_Controller{
    function index(){
        unset($_SESSION['userId']);
        redirect($this->config->base_url());
    }
}
?>