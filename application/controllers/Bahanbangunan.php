<?php
class Bahanbangunan extends CI_Controller{
    public function index(){
        $query['barang'] = $this->db->query('select distinct id_barang, nama_barang, harga_barang, jumlah_barang, deskripsi_barang, slug from gambarbarang join barang using(id_barang) ')->result_array();
        $this->load->view('template/header.php');
        $this->load->view('bahanbangunan',$query);
        $this->load->view('template/footer.php');
    }
    public function product(){
        if(isset($_SESSION['userId'])){
            if(isset($_GET['id'])){
                $this->db->where('id_barang',$_GET['id']);
                $query['barang'] = $this->db->get('barang')->result_array();
                $this->load->view('template/header.php');
                $this->load->view('Produkbahanbangunan',$query);
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
                $data['id_barang'] = $_GET['id'];
                $this->db->insert('keranjang',$data);
                redirect($this->config->base_url().'bahanbangunan/product?id='.$_GET['id']);
                $this->session->set_flashdata('beli','berhasil');
            }
        }else{
            redirect($this->config->base_url());
        }
    }
}
?>