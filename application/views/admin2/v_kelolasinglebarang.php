<script>
    $(document).ready(function(){
        $('input[name="nama"]').val("<?php echo $barang['nama_barang'] ?>");
        $('input[name="harga"]').val(<?php echo $barang['harga_barang'] ?>);
        $('input[name="jumlah"]').val(<?php echo $barang['jumlah_barang'] ?>);
    });
</script>
<form method="post" action="<?php echo $this->config->base_url(); ?>admin2/editbarang">
  <div class="form-group">
      <input type="text" name="idlama" style="display:none;" value="<?php echo $barang['id_barang'];?>">
    <label for="exampleInputEmail1">Nama : </label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga : </label>
    <input type="number" name='harga' class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah : </label>
    <input type="number" name='jumlah' class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		