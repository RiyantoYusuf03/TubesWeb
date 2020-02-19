<?php
	include "koneksi.php";
	$id_barang=$_POST['id_barang'];
	$id_kategori=$_POST['id_kategori'];
	$nama_barang=$_POST['nama_barang'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];	
		   	
	$sql = "INSERT into tb_barang (id_barang, id_kategori, nama_barang, harga, stok) values('$id_barang', '$id_kategori', '$nama_barang','$harga','$stok','$id_barang')";
	$query  =mysqli_query($koneksi,$sql);
	if($query)
	{
		header('location:crud.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>