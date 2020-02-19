<?php
	include "../../koneksi.php";
	
	$id_pembeli = $_GET['id_pembeli'];
	$sql = "DELETE FROM tb_pembeli WHERE id_pembeli = '$id_pembeli'";
	$query = mysqli_query($koneksi,$sql);
	if($query)
	{
	header('location:bacapembeli.php');
	}
	else
	{
	echo "Hapus Pembeli Gagal";
	}
?>