<?php
	include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h2>Edit - Kategori</h2>
      <hr>
      <?php
			$id_kategori=$_GET['id_kategori'];
			$sql = "SELECT * FROM tb_kategori WHERE id_kategori ='$id_kategori'";
			$query = mysqli_query($koneksi,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='aksi_edit_kategori.php?id=<?php echo "$id_kategori"; ?>' method='POST'>
			<table  border="0">
			<tr>
			  <td>ID Kategori</td>
			  <td><input name='id_kategori' type='text' id="id_kategori" value="<?php echo $data['id_kategori'] ?>"></td>
			  </tr>
			<tr>
			  <td>Jenis Kategori</td>
			  <td><input name='jenis_kategori' type='text' id="jenis_kategori" value="<?php echo $data['jenis_kategori'] ?>"></td>
			  </tr>
			  
			<td></td>
			<td><input class="tombol" type='submit' value='Simpan'></td>
			</tr>
			</table>
		</form>
</body>
</html>