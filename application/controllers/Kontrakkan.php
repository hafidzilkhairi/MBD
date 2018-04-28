<?php
class Kontrakkan extends CI_Controller{
    function index(){
        if(isset($_SESSION['userId'])){
            $query['rumah'] = $this->db->query('select id_hunian, nama_hunian, harga_hunian, deskripsi from hunian where not status_hunian=2')->result_array();
            $this->load->view('template/header.php');
            $this->load->view('kontrakkan',$query);
            $this->load->view('template/footer.php');
        }else{
            redirect($this->config->base_url());
        }
    }
    public function product(){
        if(isset($_SESSION['userId'])){
            if(isset($_GET['id'])){
                $this->db->where('id_hunian',$_GET['id']);
                $query['rumah'] = $this->db->get('hunian')->result_array();
                $this->load->view('template/header.php');
                $this->load->view('Produkkontrakkan',$query);
                $this->load->view('template/footer.php');
            }
        }else{
            redirect($this->config->base_url());
        }
    }
    public function tambahkeranjang(){
        if(isset($_SESSION['userId'])){
            if(isset($_GET['id'])){
                $data['id_user'] = $_SESSION['userId'];
                $data['id_hunian'] = $_GET['id'];
                $this->db->insert('pesananhunian',$data);
                redirect($this->config->base_url().'kontrakkan/product?id='.$_GET['id']);
                $this->session->set_flashdata('beli','berhasil');
            }
        }else{
            redirect($this->config->base_url());
        }
    }
}
?>