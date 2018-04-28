<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        if(isset($_SESSION['userId'])){
            redirect($this->config->base_url());
        }else{
            // $this->load->view('template/header');
            $this->load->view('v_login');
            // $this->load->view('template/footer');
        }
    }
    function action(){
        if(isset($_SESSION['userId'])){
            redirect($this->config->base_url());
        }else{
            if(isset($_POST['uname'])&&isset($_POST['pwd'])){
                $username = $_POST['uname'];
                $pwd = $_POST['pwd'];
                $this->form_validation->set_rules('uname', 'Username', 'required|callback_sama');
                $this->form_validation->set_rules('pwd', 'Password', 'required');
                if ($this->form_validation->run() == FALSE){
                    // $this->load->view('template/header');
                    $this->load->view('v_login');
                    // $this->load->view('template/footer');
                }else{
                    unset($_SESSION['userAdminId']);
                    $query = $this->db->query('select * from user where username_user="'.$username.'" AND password_user="'.$pwd.'"');
                    $this->session->set_userdata('userId',$query->result_array()[0]['id_user']);
                    redirect($this->config->base_url());
                }
            }else{
                // $this->load->view('template/header');
                $this->load->view('v_login');
                // $this->load->view('template/footer');
            }
        }
    }
    public function sama(){
        if(isset($_SESSION['userId'])){
            redirect($this->config->base_url());
        }else{        
            if(isset($_POST['uname'])){
                $username = $this->input->post('uname');
                $pwd = $this->input->post('pwd');
                $query = $this->db->query('select * from user where username_user="'.$username.'" AND password_user="'.$pwd.'"');
                if($query->num_rows()>0){
                    return true;
                }else{
                    if($_POST['uname']==''){
                        $this->form_validation->set_message('sama','The Username field is required.');
                    }else
                        $this->form_validation->set_message('sama','Maaf akun tidak terdaftar atau Password salah');
                    return $query->num_rows()>0;
                }
            }else{
                $this->form_validation->set_message('sama','The Username field is required.');
                return false;
            }
        }            
    }
}
?>