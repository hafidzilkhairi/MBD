<?php

if($this->session->flashdata('edithunian')=='sukses'){
    ?>
	<script>
		alert('Pengeditan Hunian Sukses');

	</script>
	<?php
    }else if($this->session->flashdata('edithunian')=='gagal'){
    ?>
		<script>
			alert('Pengeditan Hunian Gagal');

		</script>
		<?php
	}
if($this->session->flashdata('hapushunian')=='sukses'){
	?>
	<script>
		alert('Penghapusan Hunian Sukses');

	</script>
	<?php
	}else if($this->session->flashdata('hapushunian')=='gagal'){
	?>
		<script>
			alert('Penghapusan Hunian Gagal');

		</script>
		<?php
	}
if($this->session->flashdata('tambahhunian')=='sukses'){
	?>
	<script>
		alert('Penambahan Hunian Sukses');

	</script>
	<?php
	}else if($this->session->flashdata('tambahhunian')=='gagal'){
	?>
		<script>
			alert('Penambahan Hunian Gagal');

		</script>
		<?php
	}
if($this->session->flashdata('uploadgambarhunian')=='sukses'){
	?>
	<script>
		alert('Upload Gambar Hunian Sukses');

	</script>
	<?php
	}else if($this->session->flashdata('uploadgambarhunian')=='gagal'){
	?>
		<script>
			alert('Upload Gambar Hunian Gagal');

		</script>
		<?php
	}
?>
			<h1 style="padding: 40px 0;" class="text-center">Hunian Management</h1>
			<a href="<?php echo $this->config->base_url();?>admin2/tambahhunian">
				<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambah">Tambah Data</button>
			</a>
			<table id="tableKelolaUser" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($hunian as $key){
						if($key['status_hunian']==0){
							$status = "Indekos";
						}else if($key['status_hunian']==1){
							$status = "Kontrakkan";
						}else if($key['status_hunian']==2){
							$status = "Rumah permanen";
						}
            $jumlah = 1;
            echo "<tr>";
                ?>
					<td>
						<?php echo $key['id_hunian'];?>
					</td>
					<td>
						<?php echo $key['nama_hunian'];?>
					</td>
					<td>
						Rp.
						<?php echo (int) $key['harga_hunian'];?>
					</td>
					<td>
						<?php echo $status;?>
					</td>
					<td>
						<a href="<?php echo $this->config->base_url(); ?>admin2/edithunian?id=<?php echo $key['id_hunian']; ?>">
							<button class='btn btn-sm btn-primary'>
								<i class='fa fa-trash'></i>Edit</button>
						</a>
						<a href="<?php echo $this->config->base_url(); ?>admin2/hapushunian?id=<?php echo $key['id_hunian']; ?>">
							<button class='btn btn-sm btn-danger'>
								<i class='fa fa-trash'></i>Hapus</button>
						</a>
						<button class='editBTN btn btn-sm btn-success '>
							<i class='fa fa-plus'></i>Tambah Gambar
						</button>
						<a href="<?php echo $this->config->base_url(); ?>admin2/hapushunian?id=<?php echo $key['id_hunian']; ?>">
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
					<?php echo form_open_multipart($this->config->base_url()."admin2/uploadgambarhunian");?>
						<span onclick="$('#formulirEdit').hide();" style="position: absolute;right: 15px;top: 10px;cursor: pointer;">
							<b>X</b>
						</span>
						<center>
							<h1>Upload Gambar</h1>
						</center>
						<input type="text" name='id_hunian' style="display: none;">
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
					$('#formulirEdit input[name="id_hunian"]').val(e[0]);
					$('#formulirEdit input[name="username"]').val(e[1]);
				});
			</script>
