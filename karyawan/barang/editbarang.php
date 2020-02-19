
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h2>Edit - Barang</h2>
      <hr>
      <?php
      include '../../koneksi.php';
			$id_barang=$_GET['id_barang'];
			$sql = "SELECT * FROM tb_barang WHERE id_barang ='$id_barang'";
			$query = mysqli_query($koneksi,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='aksi_edit_barang.php?id_barang=<?php echo "$id_barang"; ?>' method='POST'>
			<table border="0">
			  <tr>
			   <td>ID Barang</td>
			  <td><input type='text' name='id_barang'  id="id_barang" value="<?php echo $data['id_barang'] ?> " required readonly>  </td>
			</tr>
			<tr>
			<td>ID Kategori</td>
	 		<td>
	  		<select name="id_kategori">
	  		<option value="">--Pilih--</option>
	  		<?php
	  			$sqlkate = "SELECT * FROM tb_kategori";
	  			$querykate = mysqli_query($koneksi, $sqlkate);
	  			while ($datakate = mysqli_fetch_array($querykate)) {
	  				echo "
	  					<option value = '$datakate[id_kategori]'>$datakate[id_kategori] - $datakate[jenis_kategori] </option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	</tr>
			  <tr>
			   <td>Nama Barang</td>
			  <td><input type='text' name='nama_barang'  id="nama_barang" value="<?php echo $data['nama_barang'] ?>">  </td>
			</tr>
			<tr>
			   <td>Harga</td>
			  <td><input type='text' name='harga'  id="harga" value="<?php echo $data['harga'] ?>">
			  </td>
			  </tr>
			  <tr>
			   <td>Stok</td>
			  <td><input type='text' name='stok'  id="stok" value="<?php echo $data['stok'] ?>">
			  </td>
			  </tr>
			  <tr>
			  <td>Gambar</td>
			  <td><input type='file' name='gambar' id="gambar" value="<?php echo $data['gambar']; ?>"style="width: 120px;float: left;margin-bottom: 5px;"></td>
			  </tr>	  
			  <tr>
				<td></td>
				<td><input type='submit' class='tombol' value='simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>