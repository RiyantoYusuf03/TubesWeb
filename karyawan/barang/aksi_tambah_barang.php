<?php
	include "../../koneksi.php";
	$id_barang=$_POST['id_barang'];
	$id_kategori=$_POST['id_kategori'];
	$nama_barang=$_POST['nama_barang'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];
	$gambar = $_FILES['gambar']['name'];
	$file_tmp = $_FILES['gambar']['tmp_name']; 


// //cek dulu jika ada gambar produk jalankan coding ini
// if($gambar != "") {
//   $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
//   $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
//   $ekstensi = strtolower(end($x));
//     
//   $angka_acak     = rand(1,999);
//   $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
//         if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
//                  //memindah file gambar ke folder gambar
//                   // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
//                  $sql= mysqli_query($koneksi,"UPDATE tb_barang SET  id_kategori = '$id_kategori', nama_barang = '$nama_barang', harga ='$harga', stok='$stok' WHERE id_barang = '$id_barang'");
//                   $query = mysqli_query($koneksi, $sql);
//                   // periska query apakah ada error
//                   if(!$query){
//                       die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
//                            " - ".mysqli_error($koneksi));
//                   } else {
//                     //tampil alert dan akan redirect ke halaman index.php
//                     //silahkan ganti index.php sesuai halaman yang akan dituju
//                     echo "<script>alert('Data berhasil ditambah.');window.location='bacabarang.php';</script>";
//                   }

//             } else {     
//              //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
//                 echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
//             }
// } else {
//    $sql = "INSERT INTO tb_barang (id_kategori, nama_barang, harga, stok, gambar) VALUES ( '$id_kategori' '$nama_barang', '$harga', '$stok', null)";
//                   $query = mysqli_query($koneksi, $sql);
//                   // periska query apakah ada error
//                   if(!$query){
//                       die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
//                            " - ".mysqli_error($koneksi));
//                   } else {
//                     //tampil alert dan akan redirect ke halaman index.php
//                     //silahkan ganti index.php sesuai halaman yang akan dituju
//                     echo "<script>alert('Data berhasil ditambah.');window.location='bacabarang.php';</script>";
//                   }
// }
	$sql = "insert into tb_barang(id_barang, id_kategori, nama_barang, harga, stok, gambar ) values('$id_barang','$id_kategori', '$nama_barang','$harga', '$stok', '$gambar')";
	$query  =mysqli_query($koneksi,$sql);
	move_uploaded_file($file_tmp, '../../images/'.$gambar);
	if($query)
	{
		header('location:bacabarang.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>