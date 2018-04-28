<?php
class Admin2 extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        if(isset($_SESSION['userAdminId'])){
            $data['user']= $this->db->query('select * from user')->result_array();
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
    public function kelolabarang(){
        if(isset($_SESSION['userAdminId'])){
            $data['barang'] = $this->db->get('barang')->result_array();
            $data['error']='';
            $this->load->view('admin2/template/header');
            $this->load->view('admin2/v_kelolabarang',$data);
            $this->load->view('admin2/template/footer');
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function editbarang(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['idlama'])){
                $data['nama_barang']=$_POST['nama'];
                $data['harga_barang']=$_POST['harga'];
                $data['jumlah_barang']=$_POST['jumlah'];
                $this->db->where('id_barang',(int)$_POST['idlama']);
                $query = $this->db->update('barang',$data);
                if($query){
                    $this->session->set_flashdata('editbarang','sukses');
                }else{
                    $this->session->set_flashdata('editbarang','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolabarang");
            }else if(isset($_GET['id'])){
                $this->db->where('id_barang',(int)$_GET['id']);
                $query = $this->db->get('barang');
                if($query->num_rows()>0){
                    $data['barang'] = $query->result_array()[0];
                    $this->load->view('admin2/template/header');
                    $this->load->view('admin2/v_kelolasinglebarang',$data);
                    $this->load->view('admin2/template/footer');
                }else{
                    redirect($this->config->base_url()."admin2/kelolabarang");
                }
            }else{
                redirect($this->config->base_url()."admin2/kelolabarang");
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function hapusbarang(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_GET['id'])){
                $this->db->where('id_barang',(int)$_GET['id']);
                if($this->db->delete('barang')){
                    $this->session->set_flashdata('hapusbarang','sukses');
                }else{
                    $this->session->set_flashdata('hapusbarang','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolabarang"); 
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    
    public function tambahbarang(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['namabarang'])){
                $data['nama_barang'] = $_POST['namabarang'];
                $data['harga_barang'] = $_POST['harga'];
                $data['jumlah_barang'] = $_POST['jumlah'];
                $data['deskripsi_barang'] = $_POST['deskripsi'];
                if($this->db->insert('barang',$data)){
                    $this->session->set_flashdata('tambahbarang','sukses');
                }else{
                    $this->session->set_flashdata('tambahbarang','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolabarang");    
            }else{
                $this->load->view('admin2/template/header');
                $this->load->view('admin2/v_tambahbarang');
                $this->load->view('admin2/template/footer');
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function uploadgambarbarang(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['id_barang'])){
                $config['upload_path']          = 'asset/barang/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 5000000;
                $file_ext = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);
                $data['id_barang'] =(int) $_POST['id_barang'];
                $this->db->insert('gambarbarang',$data);
                $query = $this->db->query('select max(id_gambar) as maks from gambarbarang')->result_array()[0];
                $config['file_name']=$query['maks'];
                $dia['slug'] = $query['maks'].'.'.$file_ext;
                //echo "<script>alert('".$dia['slug']."');</script>";
                $this->db->where('id_gambar',$query['maks']);
                $this->db->update('gambarbarang',$dia);
                $this->load->library('upload', $config);
                if(file_exists('asset/barang/'.$dia['slug'])) unlink('asset/barang/'.$dia['slug']);
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $this->db->query('delete from gambarbarang where id_gambar='.$query['maks']);
                    $this->session->set_flashdata('uploadgambarbarang','gagal');
                    $error = array('error' => $this->upload->display_errors());
                    redirect($this->config->base_url().'admin2/kelolabarang');
                }
                else
                {  
                    $this->session->set_flashdata('uploadgambarbarang','sukses');
                    redirect($this->config->base_url().'admin2/kelolabarang');
                }
            }else{
                redirect($this->config->base_url()."admin2/kelolabarang");
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function kelolagambarbarang(){
        if(isset($_SESSION['userAdminId'])){
            $query = $this->db->query('select * from gambarbarang join barang using(id_barang)');
            if($query->num_rows()>0){
                $data['gbrbrg'] = $query->result_array();
            }else{
                $data['gbrbrg'] = $query->result_array();
            }
            $this->load->view('admin2/template/header');
            $this->load->view('admin2/v_kelolagambarbarang',$data);
            $this->load->view('admin2/template/footer');
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    
    public function hapusgambarbarang(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_GET['id'])){
                $this->db->where('id_gambar',(int)$_GET['id']);
                if($this->db->delete('gambarbarang')){
                    $this->session->set_flashdata('hapusgambarbarang','sukses');
                }else{
                    $this->session->set_flashdata('hapusgambarbarang','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolagambarbarang"); 
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }

    public function kelolahunian(){
        if(isset($_SESSION['userAdminId'])){
            $query = $this->db->query('select * from hunian');
            if($query->num_rows()>0){
                $data['hunian'] = $query->result_array();
            }else{
                $data['hunian'] = $query->result_array();
            }
            $this->load->view('admin2/template/header');
            $this->load->view('admin2/v_kelolahunian',$data);
            $this->load->view('admin2/template/footer');
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function tambahhunian(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['nama_hunian'])){
               $data = $this->input->post(null,TRUE);
                if($this->db->insert('hunian',$data)){
                    $this->session->set_flashdata('tambahhunian','sukses');
                }else{
                    $this->session->set_flashdata('tambahhunian','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolahunian");    
            }else{
                $this->load->view('admin2/template/header');
                $this->load->view('admin2/v_tambahhunian');
                $this->load->view('admin2/template/footer');
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }

    public function edithunian(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['idlama'])){
                $data['nama_hunian']=$_POST['nama'];
                $data['harga_hunian']=$_POST['harga'];
                $data['status_hunian']=$_POST['status_hunian'];
                $data['deskripsi']= $_POST['comment'];
                echo $_POST['comment'];
                $this->db->where('id_hunian',(int)$_POST['idlama']);
                $query = $this->db->update('hunian',$data);
                if($query){
                    $this->session->set_flashdata('edithunian','sukses');
                }else{
                    $this->session->set_flashdata('edithunian','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolahunian");
            }else if(isset($_GET['id'])){
                $this->db->where('id_hunian',(int)$_GET['id']);
                $query = $this->db->get('hunian');
                if($query->num_rows()>0){
                    $data['hunian'] = $query->result_array()[0];
                    $this->load->view('admin2/template/header');
                    $this->load->view('admin2/v_kelolasinglehunian',$data);
                    $this->load->view('admin2/template/footer');
                }else{
                    redirect($this->config->base_url()."admin2/kelolahunian");
                }
            }else{
                redirect($this->config->base_url()."admin2/kelolahunian");
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    
    public function hapushunian(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_GET['id'])){
                $this->db->where('id_hunian',(int)$_GET['id']);
                if($this->db->delete('hunian')){
                    $this->session->set_flashdata('hapushunian','sukses');
                }else{
                    $this->session->set_flashdata('hapushunian','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolahunian"); 
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function uploadgambarhunian(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['id_hunian'])){
                $config['upload_path']          = 'asset/hunian/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 5000000;
                $file_ext = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);
                $data['id_hunian'] =(int) $_POST['id_hunian'];
                $this->db->insert('gambarhunian',$data);
                $query = $this->db->query('select max(id_gambarhunian) as maks from gambarhunian')->result_array()[0];
                $config['file_name']=$query['maks'];
                $dia['slug'] = $query['maks'].'.'.$file_ext;

                //echo "<script>alert('".$dia['slug']."');</script>";
                $this->db->where('id_gambarhunian',$query['maks']);
                $this->db->update('gambarhunian',$dia);
                $this->load->library('upload', $config);
                if(file_exists('asset/hunian/'.$dia['slug'])) unlink('asset/hunian/'.$dia['slug']);
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $this->db->query('delete from gambarhunian where id_gambarhunian='.$query['maks']);
                    $this->session->set_flashdata('uploadgambarhunian','gagal');
                    $error = array('error' => $this->upload->display_errors());
                    redirect($this->config->base_url().'admin2/kelolahunian');
                }
                else
                {  
                    $this->session->set_flashdata('uploadgambarhunian','sukses');
                    redirect($this->config->base_url().'admin2/kelolahunian');
                }
            }else{
                redirect($this->config->base_url()."admin2/kelolahunian");
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function kelolagambarhunian(){
        if(isset($_SESSION['userAdminId'])){
            $query = $this->db->query('select * from gambarhunian join hunian using(id_hunian)');
            if($query->num_rows()>0){
                $data['gbrbrg'] = $query->result_array();
            }else{
                $data['gbrbrg'] = $query->result_array();
            }
            $this->load->view('admin2/template/header');
            $this->load->view('admin2/v_kelolagambarhunian',$data);
            $this->load->view('admin2/template/footer');
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
    public function hapusgambarhunian(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_GET['id'])){
                $this->db->where('id_gambarhunian',(int)$_GET['id']);
                if($this->db->delete('gambarhunian')){
                    $this->session->set_flashdata('hapusgambarhunian','sukses');
                }else{
                    $this->session->set_flashdata('hapusgambarhunian','gagal');
                }
                redirect($this->config->base_url()."admin2/kelolagambarhunian"); 
            }
        }else{
            redirect($this->config->base_url()."admin2");
        }
    }
}
?>