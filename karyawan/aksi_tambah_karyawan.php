<?php
	include "../koneksi.php";
	$id_karyawan=$_POST['id_karyawan'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	$sql = "INSERT INTO karyawan(id_karyawan,nama,username, password,level) values('$id_karyawan','$nama','$username','$password','$level')";
	$query  =mysqli_query($koneksi,$sql);
	if($query)
	{
		header('location:bacakaryawan.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>