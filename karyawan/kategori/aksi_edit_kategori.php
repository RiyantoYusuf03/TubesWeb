<?php
	include "../../koneksi.php";
	$id_kategori=$_POST['id_kategori'];
	$jenis_kategori=$_POST['jenis_kategori'];



	$sql= "UPDATE tb_kategori SET id_kategori = '$id_kategori', jenis_kategori = '$jenis_kategori'  WHERE id_kategori = '$id_kategori'";
	$query = mysqli_query($koneksi,$sql);
	if($query)
	{
	header('location:baca.php');
	}
	else
	{
	echo "Edit Kategori gagal";
	}
?>