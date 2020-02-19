<?php
	include "../koneksi.php";
	
	$id_karyawan = $_GET['id_karyawan'];
	$sql = "DELETE FROM karyawan WHERE id_karyawan = '$id_karyawan'";
	$query = mysqli_query($koneksi,$sql);
	if($query)
	{
	header('location:bacakaryawan.php');
	}
	else
	{
	echo "Hapus Karyawan Gagal";
	}
?>