<?php 
	include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
   <h2>Tambah </h2>
      <hr>
      <form action='aksi_tambah_kategori.php' method='POST'>
	<table class="table1" border="0">
	  
	<tr>
	  <td>Jenis Kategori</td>
	  <td><input type='text' name='jenis_kategori' id="kategori"></td>
	</tr>
		<tr>
		<td></td>
		<td>
	  <input class="tombol" type='submit' value='Simpan'>
	  </td></tr>
	</table>
</form>
</body>
</html>