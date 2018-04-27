<?php
if($hunian['status_hunian']==0){
  $status = 'Indekos';
}else if($hunian['status_hunian']==1){
  $status = 'Kontrakkan';
}else if($hunian['status_hunian']==2){
  $status = 'Rumah Permanen';
}
?>
	<script>
		$(document).ready(function () {
			$('input[name="nama"]').val("<?php echo $hunian['nama_hunian'] ;?>");
			$('input[name="harga"]').val(<?php echo $hunian['harga_hunian'] ;?>);
			$('input[name="status"]').val("<?php echo $status ?>");
      $('textarea[name="deskripsi"]').html("");
			$('textarea[name="deskripsi"]').text("");
		});

	</script>
	<form method="post" action="<?php echo $this->config->base_url(); ?>admin2/edithunian" name="iniformku">
		<div class="form-group">
			<input type="text" name="idlama" style="display:none;" value="<?php echo $hunian['id_hunian'];?>">
			<label for="exampleInputEmail1">Nama : </label>
			<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Harga : </label>
			<input type="number" name='harga' class="form-control" id="exampleInputPassword1">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">status : </label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status_hunian" id="exampleRadios1" value="0"<?php if($hunian['status_hunian']==0) echo " checked ";?>>
				<label class="form-check-label" for="exampleRadios1">
					Indekos
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status_hunian" id="exampleRadios2" value="1"<?php if($hunian['status_hunian']==1) echo " checked ";?>>
				<label class="form-check-label" for="exampleRadios2">
					Kontrakkan
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status_hunian" id="exampleRadios2" value="2"<?php if($hunian['status_hunian']==2) echo " checked ";?>>
				<label class="form-check-label" for="exampleRadios2">
					Rumah Permanen
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Deskripsi : </label>
			<textarea name='comment' class="form-control" id="iniInputtan"><?php echo $hunian['deskripsi'] ;?></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
