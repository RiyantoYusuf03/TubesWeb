<?php
	include "../../koneksi.php";
	$id_barang=$_POST['id_barang'];
	$id_kategori=$_POST['id_kategori'];
	$nama_barang=$_POST['nama_barang'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];
	$gambar = $_FILES['gambar']['name'];
	$file_tmp = $_FILES['gambar']['tmp_name']; 

	$sql=mysqli_query($koneksi, "UPDATE tb_barang SET id_barang ='$id_barang', id_kategori = '$id_kategori', nama_barang = '$nama_barang', harga='$harga', stok='$stok' WHERE id_barang = '$id_barang'");
	move_uploaded_file($file_tmp, '../../images/'.$gambar);
	if($sql)
	{
	header('location:bacabarang.php');
	}
	else
	{
	echo "Edit Barang gagal";
	}
?>