<?php
	include "../../koneksi.php";
	
	$id_kategori = $_GET['id_kategori'];
	$sql = "DELETE FROM tb_kategori WHERE id_kategori = '$id_kategori'";
	$query = mysqli_query($koneksi,$sql);
	if($query)
	{
	header('location:baca.php');
	}
	else
	{
	echo "Hapus Kategori Gagal";
	}
?>