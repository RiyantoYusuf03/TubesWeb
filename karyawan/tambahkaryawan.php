<?php 
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Tambah - Karyawan</h2>
      <hr>
      <form action='aksi_tambah_karyawan.php' method='POST'>
	<table class="table1" border="0">
	  <td>Username</td>
	  <td><input type='text' name='username' id="username"></td>
	  </tr>
	<tr>
	  <td>Nama Karyawan</td>
	  <td><input type='text' name='nama' id="nama"></td>
	</tr>
	<tr>
	   <td>Password</td>
	  <td><input type='password' name='password' id="password"></td>
	</tr> 
	<tr>
		<td>Level</td>
		<td><input type="level" name="level" id="level"></td>
	</tr>
		<tr>
		<td></td>
		<td >
	  <input class="tombol" type='submit' value='Simpan'>
	  </td></tr>
	</table>
</form>

</body>
</html>