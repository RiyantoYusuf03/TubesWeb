<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h2>Edit -  Karyawan</h2>
      <hr>
      <?php
			$id_karyawan=$_GET['id_karyawan'];
			$sql = "SELECT * FROM karyawan WHERE id_karyawan ='$id_karyawan'";
			$query = mysqli_query($koneksi,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='aksi_edit_karyawan.php?id_karyawan=<?php echo "$id_karyawan"; ?>' method='POST' readonly>
			<table class="table1" border="0">
			   <tr>
			  <td>ID Karyawan</td>
			  <td><input name='id_karyawan' type='text' id="id_karyawan" value="<?php echo $data['id_karyawan'] ?>"></td>
			  </tr>
			  <tr>
			  <td>Nama Karyawan</td>
			  <td><input name='nama' type='text' id="nama" value="<?php echo $data['nama'] ?>"></td>
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
			  <td>Level</td>
			  <td><input name='level' type='text' id="level" value="<?php echo $data['level'] ?>"></td>
			  </tr>
				<td></td>
				<td><input class="tombol" type='submit' value='Simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>
