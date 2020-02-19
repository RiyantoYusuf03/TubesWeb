<?php
	include '../../koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
   <h2>Tambah - Barang</h2>
      <hr>
      <form action='aksi_tambah_barang.php' method='POST' enctype="multipart/form-data">
	<table border="0">
	<tr>
	  <td>ID Barang</td>
	  <td><input type='text' name='id_barang' id="id_barang" placeholder="ID Barang"></td>
	  </tr>
	  <tr>
	  <td>Kategori</td>
	   <td>
	  	<select name="id_kategori">
	  		<option value="id_kategori">--Pilih--</option>
	  		<?php
	  			$sqlkate = "select * from tb_kategori";
	  			$querykate= mysqli_query($koneksi, $sqlkate);
	  			while ($datakate = mysqli_fetch_array($querykate)) {
	  				echo "
	  					<option value = '$datakate[id_kategori]'>$datakate[id_kategori] - $datakate[jenis_kategori]</option>";
	  			}
	  		?>
	  	</select>
	  	</td>
	  </tr>
	  <tr>
	  <td>Nama Barang</td>
	  <td><input type='text' name='nama_barang' id="nama_barang"></td>
	  </tr>
	  <tr>
	  <td>Harga</td>
	  <td><input type='text' name='harga' id="harga"></td>
	  </tr>
	  <tr>
	  <td>Stok</td>
	  <td><input type='text' name='stok' id="stok"></td>
	  </tr>
	  <tr>
	  <td>Gambar</td>
	  <td><input type='file' name='gambar' id="gambar"></td>
	  </tr>  
	<tr>
		<td></td>
		<td >
	  <input type='submit' class="tombol" value='Simpan'>
	  </td></tr>
	</table>
</form>
</body>
</html>