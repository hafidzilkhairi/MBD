<h1 style="padding: 40px 0;" class="text-center">Tambah Barang</h1>
<form method='post' action='<?php echo $this->config->base_url(); ?>/admin2/tambahbarang'>
	<div class="form-group">
		<label for="exampleInputEmail1">Nama Barang :</label>
		<input required name='namabarang' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">harga :</label>
		<input name="harga" type="number" class="form-control" id="exampleInputPassword1">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Jumlah :</label>
		<input name="jumlah" type="number" class="form-control" id="exampleInputPassword1">
	</div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
	<button style="float:right;margin:20px;min-width:200px;padding:15px 0;" type="submit" class="btn btn-primary float-right">Submit</button>
    <div style="clear:both"></div>
    <div class="alert alert-danger" role="alert">
    Untuk menambahkan Gambar, anda harus menambahkan barang terlebih dahulu
    </div>
</form>
