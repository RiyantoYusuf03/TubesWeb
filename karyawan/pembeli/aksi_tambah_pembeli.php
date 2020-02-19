<?php
	include "../../koneksi.php";
	$id_pembeli=$_POST['id_pembeli'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama_pembeli=$_POST['nama_pembeli'];
	$alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];
	$sql = "insert into tb_pembeli(id_pembeli,username,password,nama_pembeli,alamat,no_hp) values('$id_pembeli','$username', '$password', '$nama_pembeli','$alamat','$no_hp')";
	$query  =mysqli_query($koneksi,$sql);
	if($query)
	{
		header('location:bacapembeli.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>