<?php 
	include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
   <h2>Tambah - Pemebeli</h2>
      <hr>
      <form action='aksi_tambah_pembeli.php' method='POST'>
	<table class="table1" border="0">
	  <td>ID Pembeli</td>
	  <td><input type='text' name='id_pembeli' id="id_pembeli"></td>
	  </tr>
	  <tr>
	  <td>Username</td>
	  <td><input type='text' name='username' id="username"></td>
	</tr>
	<tr>
	  <td>Password</td>
	  <td><input type='text' name='password' id="password"></td>
	</tr>
	<tr>
	  <td>Nama Pembeli</td>
	  <td><input type='text' name='nama_pembeli' id="nama_pembeli"></td>
	</tr>
	   <td>Alamat</td>
	  <td><input type='text' name='alamat' id="alamat"></td>
	</tr> 
	<td>No Hp</td>
	  <td><input type='text' name='no_hp' id="no_hp"></td>
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