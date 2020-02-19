<?php
	include "../../koneksi.php";
	$id_pembeli=$_POST['id_pembeli'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama_pembeli=$_POST['nama_pembeli'];
	$alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];

	$sql= "UPDATE tb_pembeli SET id_pembeli = '$id_pembeli', username='$username', password='$password', nama_pembeli='$nama_pembeli', alamat = '$alamat', no_hp = '$no_hp' WHERE id_pembeli = '$id_pembeli'";
	$query = mysqli_query($koneksi,$sql);
	if($query)
	{
	header('location:bacapembeli.php');
	}
	else
	{
	echo "Edit Pembeli Gagal";
	}
?>