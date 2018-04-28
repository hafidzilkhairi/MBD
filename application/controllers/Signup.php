<?php
class Signup extends CI_Controller{
    public function __contruct(){
        parent::__contruct();
    }
    public function index(){
        // $this->load->view('template/header');
        if(isset($_SESSION['userId'])){
            redirect($this->config->base_url());
        }else{
            $this->load->view('v_signup');
        }
        // $this->load->view('template/footer');
    }
    public function action(){
        if(isset($_SESSION['userId'])){
            redirect($this->config->base_url());
        }else{
            if(isset($_POST['uname'])){        
                $this->form_validation->set_rules('uname', 'Username', 'required|callback_sama');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('pwd', 'Password', 'required');
                $this->form_validation->set_rules('pwdv', 'Password Confirmation', 'required');
                if ($this->form_validation->run() == FALSE){
                    $this->load->view('v_signup');
                }
                else{
                    $data['username_user'] = $_POST['uname'];
                    $data['email_user'] = $_POST['uname'];
                    $data['password_user'] = $_POST['uname'];
                    $data['level_user'] = 0;
                    $data['status_user'] = 1;
                    $this->db->insert('user',$data);
                    $this->db->where($data);
                    $id = $this->db->get('user','id_user');
                    $this->session->set_userdata('userId',$id);
                    redirect($this->config->base_url());
                }
            }else{
                redirect($this->config->base_url().'signup');
            }
        }
    }
    public function sama(){
        if(isset($_SESSION['userId'])){
            redirect($this->config->base_url());
        }else{
            if(isset($_POST['uname'])){
                $uname = $_POST['uname'];
                $email = $this->input->post('email');
                $pwd=$this->input->post('pwd');
                $pwdv=$this->input->post('pwdv');
                if($this->db->query('select * from user where username_user="'.$uname.'" or email_user="'.$email.'"')->num_rows()>0){
                    $this->form_validation->set_message('sama', 'Email atau User yang diinput sudah terdaftar');
                    return false;
                }else if($pwd!=$pwdv){
                    $this->form_validation->set_message('sama', 'Password berbeda dengan validasi');
                    return false;
                }else{
                    return true;
                }
            }else{
                redirect($this->config->base_url().'signup');
            }
        }
    }
}
?>