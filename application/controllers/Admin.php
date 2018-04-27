<?php
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if(isset($_SESSION['userAdminId'])){
            $data['user']= $this->db->query('select * from user')->result_array();;
            $this->load->view('admin/template/header');
            $this->load->view('admin/v_kelolauser',$data);
        }else{
            redirect($this->config->base_url().'admin/login');
        }
    }
    function login(){
        if(isset($_SESSION['userAdminId'])){
            redirect($this->config->base_url().'admin');
        }else{
            if(isset($_POST['username'])&&isset($_POST['pwd'])){
                $username = $_POST['username'];
                $pwd = $_POST['pwd'];
                $this->form_validation->set_rules('username', 'Username', 'required|callback_sama');
                $this->form_validation->set_rules('pwd', 'Password', 'required');
                if ($this->form_validation->run() == FALSE){
                    $this->load->view('admin/login');
                }else{
                    unset($_SESSION['userId']);
                    $query = $query = $this->db->query('select * from user where username_user="'.$username.'" AND password_user="'.$pwd.'" and level_user=true');
                    $this->session->set_userdata('userAdminId',$query->result_array()[0]['id_user']);
                    redirect($this->config->base_url()."admin");
                }
            }else{
                $this->load->view('admin/login');
            }
        }
    }
    function kelolauser(){
        $data['user']= $this->db->query('select * from user')->result_array();;
        $this->load->view('admin/template/header');
        $this->load->view('admin/v_kelolauser',$data);
    }
    public function sama(){
        if(isset($_POST['username'])){
            $username = $this->input->post('username');
            $pwd = $this->input->post('pwd');
            $query = $this->db->query('select * from user where username_user="'.$username.'" AND password_user="'.$pwd.'" and level_user=true');
            if($query->num_rows()>0){
                return true;
            }else{
                if($_POST['username']==''){
                    $this->form_validation->set_message('sama','The Email field is required.');
                }else
                    $this->form_validation->set_message('sama','Maaf akun tidak terdaftar atau Password salah');
                return $query->num_rows()>0;
            }
        }else{
            $this->form_validation->set_message('sama','The Email field is required.');
            return false;
        }
    }
}
?>