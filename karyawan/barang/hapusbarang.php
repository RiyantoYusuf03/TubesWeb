<?php
	include "../../koneksi.php";
	
	$id_barang = $_GET['id_barang'];
	$sql = "DELETE FROM tb_barang WHERE id_barang = '$id_barang'";
	$query = mysqli_query($koneksi,$sql);
	if($query)
	{
	header('location:bacabarang.php');
	}
	else
	{
	echo "hapus Barang Gagal";
	}
?>