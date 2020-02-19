<?php 
session_start();    
include "koneksi.php"; 
echo"<h1>Daftar Produk</h1>
     <ul>";
$sql=mysqli_query($koneksi, "SELECT * FROM tb_barang");
while($d=mysqli_fetch_array($sql)){
        echo"<li>$data[nama_barang] : $data[harga] ||<a href='aksi_keranjang.php?id=$data[id_barang]'>Beli</a></li>";
        }
echo"</ul>";
?>