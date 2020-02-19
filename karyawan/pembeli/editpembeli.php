<?php
	include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h2>Edit - Pembeli</h2>
      <hr>
      <?php
			$id_pembeli=$_GET['id_pembeli'];
			$sql = "SELECT * FROM tb_pembeli WHERE id_pembeli ='$id_pembeli'";
			$query = mysqli_query($koneksi,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='aksi_edit_pembeli.php?id=<?php echo "$id_pembeli"; ?>' method='POST' readonly>
			<table class="table1" border="0">
			   <tr>
			  <td>ID Pembeli</td>
			  <td><input name='id_pembeli' type='text' id="id_pembeli" value="<?php echo $data['id_pembeli'] ?>"></td>
			  </tr>
			  <tr>
			  <td>Username</td>
			  <td><input name='username' type='text' id="username" value="<?php echo $data['username'] ?>"></td>
			  </tr>
			  <tr>
			  <td>Password</td>
			  <td><input name='password' type='text' id="password" value="<?php echo $data['password'] ?>"></td>
			  </tr>
			  <tr>
			  <td>Nama Pembeli</td>
			  <td><input name='nama_pembeli' type='text' id="nama_pembeli" value="<?php echo $data['nama_pembeli'] ?>"></td>
			  </tr>
			  <tr>
			  <td>Alamat</td>
			  <td><input name='alamat' type='text' id="alamat" value="<?php echo $data['alamat'] ?>"></td>
			  </tr>
			  <tr>
			  <td>No Telepon</td>
			  <td><input name='no_hp' type='text' id="no_hp" value="<?php echo $data['no_hp'] ?>"></td>
			  </tr>
				<td></td>
				<td><input class="tombol" type='submit' value='Simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>
