<?php
class barang extends CI_Model{
    public function getSingleBarang($id){
        return $this->db->get('barang');
    }
    public function getBarang(){
        return $this->db->get('barang');
    }
}
?>