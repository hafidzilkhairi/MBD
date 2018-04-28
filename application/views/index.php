<div style="padding-top:40px;">
</div>

<div class="row">
<?php foreach ($rumah as $key){
    $this->db->where('id_hunian',$key['id_hunian']);
    $query = $this->db->get('gambarhunian');
    if($query->num_rows()>0){
        $key['slug']=$query->result_array()[0]['slug'];
    }else{
        $key['slug']='';
    }
?>  
   <div class="col-lg-4 col-md-6 mb-4" style="max-height:500px;overflow:hidden;position:relative;">
		<div class="card h-100">
			<a href="#">
				<img style="max-height:190px;object-fit:cover;" class="card-img-top" src="<?php echo $this->config->base_url();?>asset/hunian/<?php echo $key['slug']; ?>" alt="">
			</a>
			<div class="card-body">
				<h4 class="card-title">
					<a href="<?php echo $this->config->base_url(); ?>home/product?id=<?php echo $key['id_hunian'] ?>"><?php echo $key['nama_hunian'] ?></a>
				</h4>
				<h5>Rp.<?php echo $key['harga_hunian'] ?></h5>
				<p class="card-text"><?php echo $key['deskripsi'];?></p>
			</div>
			<div class="card-footer" style="padding:0;position:absolute;bottom:0;left:0;width:100%;z-index:1;">
				<a href='<?php echo $this->config->base_url(); ?>home/product?id=<?php echo $key['id_hunian'] ?>'><button type="button" class="btn btn-primary btn-block">Beli!!!</button></a>
			</div>
		</div>
	</div> 
<?php  
}?>
</div>
<!-- /.row -->
