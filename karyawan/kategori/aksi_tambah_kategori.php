<?php
	include "../../koneksi.php";
	$id_kategori=$_POST['id_kategori'];
	$jenis_kategori=$_POST['jenis_kategori'];

	

	//proses memasukan data ke database dengan perintah insert into
	$sql = "insert into tb_kategori(id_kategori, jenis_kategori) values('$id_kategori','$jenis_kategori')";
	$query  =mysqli_query($koneksi,$sql);

	if($query)
	{
		//jika berhasil disimpan makan akan menuju halaman baca
		header('location:baca.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>