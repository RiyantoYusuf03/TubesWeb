<?php
	include "../koneksi.php";
	$id_karyawan=$_POST['id_karyawan'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];

	$sql= "UPDATE karyawan SET id_karyawan = '$id_karyawan',nama='$nama', username = '$username', password = '$password', level='$level' WHERE id_karyawan = '$id_karyawan'";
	$query = mysqli_query($koneksi,$sql);
	if($query)
	{
	header('location:bacakaryawan.php');
	}
	else
	{
	echo "Edit Karyawan gagal";
	}
?>