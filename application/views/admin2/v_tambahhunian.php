<h1 style="padding: 40px 0;" class="text-center">Tambah hunian</h1>
<form method='post' action='<?php echo $this->config->base_url(); ?>/admin2/tambahhunian'>
	<div class="form-group">
		<label for="exampleInputEmail1">Nama Hunian :</label>
		<input required name='nama_hunian' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Harga :</label>
		<input name="harga_hunian" type="number" class="form-control" id="exampleInputPassword1">
	</div>
	<div class="form-group">
			<label for="exampleInputPassword1">status : </label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status_hunian" id="exampleRadios1" value="0" checked>
				<label class="form-check-label" for="exampleRadios1">
					Indekos
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status_hunian" id="exampleRadios2" value="1" >
				<label class="form-check-label" for="exampleRadios2">
					Kontrakkan
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status_hunian" id="exampleRadios2" value="2" >
				<label class="form-check-label" for="exampleRadios2">
					Rumah Permanen
				</label>
			</div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
	<button style="float:right;margin:20px;min-width:200px;padding:15px 0;" type="submit" class="btn btn-primary float-right">Submit</button>
    <div style="clear:both"></div>
    <div class="alert alert-danger" role="alert">
    Untuk menambahkan Gambar, anda harus menambahkan Hunian terlebih dahulu
    </div>
</form>
