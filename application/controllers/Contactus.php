<?php
class Contactus extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        if(isset($_SESSION['userId'])){
            $this->load->view('template/header');
            $this->load->view('v_contactus');
            $this->load->view('template/footer');
        }else{
            redirect($this->config->base_url());
        }
    }
    public function kirimpesan(){
        if(isset($_SESSION['userId'])){
            if(isset($_POST['pesankita'])){
                $data['id_user']=$_SESSION['userId'];
                $data['pesan']=$_POST['pesankita'];
                $this->db->insert('pesanuser',$data);
                redirect($this->config->base_url());
            }else{
                $this->load->view('template/header');
                $this->load->view('v_contactus');
                $this->load->view('template/footer');
            }
        }else{
            redirect($this->config->base_url());
        }
    }
}
?>