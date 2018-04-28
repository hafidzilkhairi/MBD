<?php
if($this->session->flashdata('edituser')=='sukses'){
?>
<script>
	alert('Edit Sukses');

</script>
<?php
}else if($this->session->flashdata('edituser')=='gagal'){
?>
	<script>
		alert('Edit Gagal');

	</script>
	<?php
}
?>
				<h1 style="padding: 40px 0;" class="text-center">Preview Pesanan</h1>
				<table id="tableKelolaUser" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Bentuk</th>
						</tr>
					</thead>
					<tbody>
                        <?php 
                        $keranjang = $this->db->query('select nama_barang, harga_barang from keranjang join barang using(id_barang) where id_user='.$_SESSION['userId'])->result_array();
                        $hunian = $this->db->query('select nama_hunian, harga_hunian from pesananhunian join hunian using(id_hunian) where id_user='.$_SESSION['userId'])->result_array();
                        $jumlah=0;
                        foreach ($keranjang as $key){
                            $jumlah +=(int)$key['harga_barang'];
            echo "<tr>";
                ?>
						<td>
							<?php echo $key['nama_barang'];?>
						</td>
						<td>
							<?php echo $key['harga_barang'];?>
						</td>
						<td>
							<?php echo 'Bahan Bangunan';?>
						</td>
						<?php
            echo "</tr>";
        } ?>

        <?php
    foreach ($hunian as $key){
        $jumlah +=(int)$key['harga_hunian'];
    
    echo "<tr>";
        ?>
                <td>
                    <?php echo $key['nama_hunian'];?>
                </td>
                <td>
                    <?php echo $key['harga_hunian'];?>
                </td>
                <td>
                    <?php echo 'Rumah/Kontrakkan';?>
                </td>
                <?php
    echo "</tr>";
    }


        ?>
            <tr>
                <td>Total</td>
                <td><?php echo $jumlah; ?></td>
                <td>----</td>
            </tr>
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
					if (e[3] == 'Admin') {
						$('#LevelRadioEdit1').attr('checked', true);
					} else {
						$('#LevelRadioEdit2').attr('checked', true);
					}
					if (e[4] == 'Aktif') {
						$('#StatusRadioEdit1').attr('checked', true);
					} else {
						$('#StatusRadioEdit2').attr('checked', true);
					}
					$('#formulirEdit input[name="email"]').val(e[5]);
				});

			</script>
