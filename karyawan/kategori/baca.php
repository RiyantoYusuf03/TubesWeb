<?php
	include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../style.css">
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
   <h2>Kategori</h2>
      <hr>
      <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <a href="tambahkategori.php" class="btn btn-success" align="right"><i class="fa fa-plus"></i> Tambah Kategori</a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
     <!-- <left><input class="tombol" type="button" value="Tambah Data" onclick="location.href='tambakategori.php'"></left>-->
      
      <br>
      <br>
		<table id="dataTable" class="table table-hover table-bordered" >
		<tr>
			<td>No</td>

		    <td>ID Kategori</td>

		    <td>Kategori</td>

		    <td>Aksi</td>
		</tr>
		<?php
		
			$no=1;
			$sql="SELECT * from tb_kategori";
			$query= mysqli_query($koneksi, $sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
					<td><?php echo "$no"; ?></td>

					<td><?php echo "$data[id_kategori]"; ?></td>	
					
					<td><?php echo "$data[jenis_kategori]"; ?></td>	

					<td>
					<a href="editkategori.php?id_kategori=<?php echo "$data[id_kategori]"; ?>" class="tombol">EDIT</a> |
					<a href="hapuskategori.php?id_kategori=<?php echo "$data[id_kategori]"; ?>"class="tombol" onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>