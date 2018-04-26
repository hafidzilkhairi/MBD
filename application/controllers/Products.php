<?php
class Products extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    function _remap($str=''){
        $this->index($str);
    }
    public function index($str=''){
        if($str==''){
            $this->load->view('template/header');
            $this->load->view('v_products');
            $this->load->view('template/footer');
        }else{
            $this->load->view('template/header');
            $this->load->view('v_singleProduct');
            $this->load->view('template/footer');
        }
    }
}
?>