<?php
if($this->session->flashdata('hapusbarang')=='sukses'){
    ?>
	<script>
		alert('Penghapusan Barang Sukses');

	</script>
	<?php
    }else if($this->session->flashdata('hapusbarang')=='gagal'){
    ?>
		<script>
			alert('Penghapusan Barang Gagal');

		</script>
		<?php
	}
if($this->session->flashdata('tambahbarang')=='sukses'){
	?>
	<script>
		alert('Penambahan Barang Sukses');

	</script>
	<?php
	}else if($this->session->flashdata('tambahbarang')=='gagal'){
	?>
		<script>
			alert('Penambahan Barang Gagal');

		</script>
		<?php
	}
if($this->session->flashdata('uploadgambarbarang')=='sukses'){
	?>
	<script>
		alert('Upload Gambar Barang Sukses');

	</script>
	<?php
	}else if($this->session->flashdata('uploadgambarbarang')=='gagal'){
	?>
		<script>
			alert('Upload Gambar Barang Gagal');

		</script>
		<?php
	}
?>
			<h1 style="padding: 40px 0;" class="text-center">Barang Management</h1>
			<?php echo $error;?>
			<a href="<?php echo $this->config->base_url();?>admin2/tambahbarang">
				<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambah">Tambah Data</button>
			</a>
			<table id="tableKelolaUser" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($barang as $key){
            $jumlah = 1;
            echo "<tr>";
                ?>
					<td>
						<?php echo $key['id_barang'];?>
					</td>
					<td>
						<?php echo $key['nama_barang'];?>
					</td>
					<td>
						Rp.
						<?php echo (int) $key['harga_barang'];?>
					</td>
					<td>
						<?php echo $key['jumlah_barang'];?> Barang
					</td>
					<td>
						<a href="<?php echo $this->config->base_url(); ?>admin2/editbarang?id=<?php echo $key['id_barang']; ?>">
							<button class='btn btn-sm btn-primary'>
								<i class='fa fa-trash'></i>Edit</button>
						</a>
						<a href="<?php echo $this->config->base_url(); ?>admin2/hapusbarang?id=<?php echo $key['id_barang']; ?>">
							<button class='btn btn-sm btn-danger'>
								<i class='fa fa-trash'></i>Hapus</button>
						</a>
						<button class='editBTN btn btn-sm btn-success '>
							<i class='fa fa-plus'></i>Tambah Gambar
						</button>
						<a href="<?php echo $this->config->base_url(); ?>admin2/hapusbarang?id=<?php echo $key['id_barang']; ?>">
							<button class='btn btn-sm btn-warning'>
								<i class='fa fa-eye '></i>Preview</button>
						</a>
					</td>
					<?php
            echo "</tr>";
        } ?>
				</tbody>
			</table>
			<div id="formulirEdit" style="display:none;z-index:10000; position: fixed;width: 100%;height: 100%;top: 0;left: 0;background: rgba(0, 0, 0, 0.7)">
					<?php echo form_open_multipart($this->config->base_url()."admin2/uploadgambarbarang");?>
						<span onclick="$('#formulirEdit').hide();" style="position: absolute;right: 15px;top: 10px;cursor: pointer;">
							<b>X</b>
						</span>
						<center>
							<h1>Upload Gambar</h1>
						</center>
						<input type="text" name='id_barang' style="display: none;">
						<div class="form-group">
							<label for="inputEditUsername">Nama : </label>
							<input required name='username' type="text" class="form-control" id="inputEditUsername" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="formfile"></label>
							<input id="formfile" class="form-control" type="file" name="userfile" size="20" />
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>

			<script>
				// function edit(str){
				//     data = str.parents('tr').data().val();
				//     console.log(data);
				//     $('#formulirEdit').show();
				//     $('#formulirEdit>input[type="email"]').val();
				// }
				table = $('#tableKelolaUser').DataTable();
				$('#tableKelolaUser tbody').on('click', '.editBTN', function () {
					$('#formulirEdit').show();
					$('#formulirEdit form').css({'position': 'relative','margin': '10% 20%','background': 'white','border-radius': '10px','padding': '20px'});
					e = table.row($(this).parents('tr')).data();
					$('#formulirEdit input[name="id_barang"]').val(e[0]);
					$('#formulirEdit input[name="username"]').val(e[1]);
				});
			</script>
