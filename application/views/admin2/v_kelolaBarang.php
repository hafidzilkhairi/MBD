<?php
if($this->session->flashdata('editbarang')=='sukses'){
?>
<script>alert('Edit Sukses');</script>
<?php
}else if($this->session->flashdata('editbarang')=='gagal'){
?>
<script>alert('Edit Gagal');</script>
<?php
}
?>
<!-- main content start-->
<div id="page-wrapper" style="padding-top:150px;">
	<div class="main-page general">
		<h2 class="title1">General Elements</h2>
		<div class="panel-info widget-shadow">
			<h1 style="padding: 40px 0;" class="text-center">User Management</h1>
			<table id="tableKelolaUser" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Deskripsi</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($user as $key){
            $jumlah = 1;
            echo "<tr>";
                ?>
					<td>
						<?php echo $key['id_user'];?>
					</td>
					<td>
						<?php echo $key['username_user'];?>
					</td>
					<td>
						<?php echo $key['password_user'];?>
					</td>
					<td>
                        <?php 
                        if($key['level_user']=='1'){
                            echo "Admin";
                        }else{
                            echo "User";
                        }?>
					</td>
					<td>
						<?php
                        if($key['status_user']=='1'){
                            echo "Aktif";
                        }else{
                            echo "Pasif";
                        }?>
					</td>
					<td>
						<?php echo $key['email_user'];?>
					</td>
					<td>
						<button class='editBTN btn btn-sm btn-primary'>
							<i class='fa fa-pencil'></i>Edit</button>
						<a href="<?php echo $this->config->base_url(); ?>admin2/hapus?id=<?php echo $key['id_user']; ?>">
							<button class='btn btn-sm btn-danger'>
								<i class='fa fa-trash'></i>Hapus</button>
					</td>
					</a>
					<?php
            echo "</tr>";
        } ?>
				</tbody>
			</table>
			<div id="formulirEdit" style="display:none;z-index:10000; position: fixed;width: 100%;height: 100%;top: 0;left: 0;background: rgba(0, 0, 0, 0.7)">
				<form method="POST" action="<?php echo $this->config->base_url(); ?>admin2/editUser" style="position: relative;margin: 10% 20%;background: white;border-radius: 10px;padding: 20px;">
					<span onclick="$('#formulirEdit').hide();" style="position: absolute;right: 15px;top: 10px;cursor: pointer;">
						<b>X</b>
					</span>
					<center>
						<h1>Edit User</h1>
					</center>
					<input type="text" name='id' style="display: none;">
					<div class="form-group">
						<label for="inputEditUsername">Username</label>
						<input required name='username' type="text" class="form-control" id="inputEditUsername" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input required name='pwd' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Level</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="LevelRadio" id="LevelRadioEdit1" value="1">
							<label class="form-check-label" for="LevelRadioEdit1">
								Admin
                            </label>
                            <input class="form-check-input" type="radio" name="LevelRadio" id="LevelRadioEdit2" value="0">
							<label class="form-check-label" for="LevelRadioEdit2">
								User
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Status</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="StatusRadio" id="StatusRadioEdit1" value="1">
							<label class="form-check-label" for="StatusRadioEdit1">
								Aktif
                            </label>
                            <input class="form-check-input" type="radio" name="StatusRadio" id="StatusRadioEdit2" value="0">
							<label class="form-check-label" for="StatusRadioEdit2">
								Pasif
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="EmailEdit">Email</label>
						<input name='email' type="text" class="form-control" id="EmailEdit" placeholder="Email">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
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
			e = table.row($(this).parents('tr')).data();
			$('#formulirEdit input[name="id"]').val(e[0]);
			$('#formulirEdit input[name="username"]').val(e[1]);
			$('#formulirEdit input[name="pwd"]').val(e[2]);
			if(e[3]=='Admin'){
                $('#LevelRadioEdit1').attr('checked',true);
            }else{
                $('#LevelRadioEdit2').attr('checked',true);
            }
			if(e[4]=='Aktif'){
                $('#StatusRadioEdit1').attr('checked',true);
            }else{
                $('#StatusRadioEdit2').attr('checked',true);
            }
			$('#formulirEdit input[name="email"]').val(e[5]);
		});

	</script>
