<?php
class Admin2 extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if(isset($_SESSION['userAdminId'])){
            $data['user']= $this->db->query('select * from user')->result_array();;
            $this->load->view('admin2/template/header');
            $this->load->view('admin2/v_kelolauser',$data);
            $this->load->view('admin2/template/footer');
        }else{
            redirect($this->config->base_url().'admin2/login');
            $this->load->view('admin2/template/footer');
        }
    }
    function login(){
        if(isset($_SESSION['userAdminId'])){
            redirect($this->config->base_url().'admin2');
        }else{
            if(isset($_POST['username'])&&isset($_POST['pwd'])){
                $username = $_POST['username'];
                $pwd = $_POST['pwd'];
                $this->form_validation->set_rules('username', 'Username', 'required|callback_sama');
                $this->form_validation->set_rules('pwd', 'Password', 'required');
                if ($this->form_validation->run() == FALSE){
                    $this->load->view('admin2/login');
                    $this->load->view('admin2/template/footer');
                }else{
                    unset($_SESSION['userId']);
                    $query = $query = $this->db->query('select * from user where username_user="'.$username.'" AND password_user="'.$pwd.'" and level_user=true');
                    $this->session->set_userdata('userAdminId',$query->result_array()[0]['id_user']);
                    redirect($this->config->base_url()."admin2");
                }
            }else{
                $this->load->view('admin2/login');
                $this->load->view('admin2/template/footer');
            }
        }
    }
    function kelolauser(){
        if(isset($_SESSION['userAdminId'])){
            $data['user']= $this->db->query('select * from user')->result_array();;
            $this->load->view('admin2/template/header');
            $this->load->view('admin2/v_kelolauser',$data);
            $this->load->view('admin2/template/footer');
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function sama(){
        if(isset($_SESSION['userAdminId'])){
            redirect($this->config->base_url()."admin2");
        }else{        
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
    public function logout(){
        unset($_SESSION['userAdminId']);
        redirect($this->config->base_url()."admin2");
    }
    public function editUser(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['id'])){
                $id =(int) $_POST['id'];
                $data['username_user'] =$_POST['username'];
                $data['password_user'] =$_POST['pwd'];
                if($_POST['LevelRadio']=='1'){
                    $data['level_user'] = 1;
                }else{
                    $data['level_user'] = 0;
                }
                if($_POST['StatusRadio']=='1'){
                    $data['status_user'] = 1;
                }else{
                    $data['status_user'] = 0;
                }
                $data['email_user'] =$_POST['email'];
                $this->db->where('id_user',(int) $id);
                $query = $this->db->update('user',$data);
                if($query){
                    $this->session->set_flashdata('edituser','sukses');
                }else{
                    $this->session->set_flashdata('edituser','gagal');
                }
                //echo 'saya'.$this->db->last_query();
                redirect($this->config->base_url()."admin2/kelolauser");
            }else{
                $this->session->set_flashdata('edituser','gagal');
                redirect($this->config->base_url()."admin2/kelolauser");
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function hapus(){
        if(isset($_SESSION['userAdminId'])){

            $this->db->where('id_user',$_GET['id']);
            $this->db->delete('user');
            if($_SESSION['userAdminId']==$_GET['id']){
                unset($_SESSION['userAdminId']);
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
}
?>