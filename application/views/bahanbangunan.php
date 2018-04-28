<div style="padding-top:40px;">
</div>
<div class="row">
<?php foreach ($barang as $key){
?>    
   <div class="col-lg-4 col-md-6 mb-4" style="max-height:500px;overflow:hidden;position:relative;">
		<div class="card h-100">
			<a href="<?php echo $this->config->base_url(); ?>bahanbangunan/product?id=<?php echo $key['id_barang']; ?>">
				<img style="max-height:190px;object-fit:cover;" class="card-img-top" src="<?php echo $this->config->base_url();?>asset/barang/<?php echo $key['slug']; ?>" alt="">
			</a>
			<div class="card-body">
				<h4 class="card-title">
					<a href="<?php echo $this->config->base_url(); ?>bahanbangunan/product?id=<?php echo $key['id_barang']; ?>"><?php echo $key['nama_barang'] ?></a>
				</h4>
				<h5>Rp.<?php echo $key['harga_barang'] ?></h5>
				<p class="card-text"><?php echo $key['deskripsi_barang'];?></p>
			</div>
			<div class="card-footer" style="padding:0;position:absolute;bottom:0;left:0;width:100%;z-index:1;">
				<a href="<?php echo $this->config->base_url(); ?>bahanbangunan/product?id=<?php echo $key['id_barang']; ?>"><button type="button" class="btn btn-primary btn-block">Beli!!!</button></a>
			</div>
		</div>
	</div> 
<?php  
}?>
</div>
<!-- /.row -->
