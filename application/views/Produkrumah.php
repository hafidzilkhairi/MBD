<?php
if($this->session->flashdata('beli')=='berhasil'){
    ?>
        <script>alert('Pembelian Berhasil');</script>
    <?php
}
foreach ($rumah as $key){
    $this->db->where('id_hunian',$key['id_hunian']);
    $query = $this->db->get('gambarhunian');
    if($query->num_rows()>0){
        $i = 0;
        foreach($query->result_array() as $value){
            $key['slug'][$i++]=$value['slug'];
        }
    }else{
        $key['slug']='';
    }
}
?>
<?php
for($i=0;$i<$query->num_rows();$i++){
?>
<div style='float:left;padding:10px;'>
    <img style="height:180px;width:180px;" class="rounded float-left" src="<?php echo $this->config->base_url(); ?>asset/hunian/<?php echo $key['slug'][$i]; ?>" alt="">
</div>
<?php
}
?>

<div style="clear:both;"></div>
<div class="card mt-4">
	<div class="card-body">
		<h3 class="card-title">
			<?php echo $key['nama_hunian']; ?>
		</h3>
		<h4>Rp.<?php echo $key['harga_hunian'];?></h4>
		<p class="card-text">
			<?php echo $key['deskripsi'];?>
		</p>

		<hr>
		<a href="<?php echo $this->config->base_url(); ?>/home/tambahkeranjang?id=<?php echo $key['id_hunian'];?>" class="btn btn-success">Beli!!!</a>
	</div>
</div>
<!-- /.card -->
