<?php 
session_start();
include "koneksi.php";
$sid = $_SESSION['id_pembeli'];
$id=$_GET['id'];
 
 
//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$sql = mysqli_query($koneksi, "SELECT id_barang FROM keranjang WHERE id_barang='$id' AND id_pembeli='$sid'");
    $ketemu=mysqli_num_rows($sql);
    if ($ketemu==0){
        // kalau barang belum ada, maka di jalankan perintah insert
        mysqli_query($koneksi, "INSERT INTO keranjang (id_barang, jumlah, id_pembeli)
                VALUES ('$id', 1, '$sid')");
    } else {
        //  kalau barang ada, maka di jalankan perintah update
        mysqli_query($koneksi, "UPDATE keranjang SET jumlah = jumlah + 1
                WHERE id_pembeli ='$sid' AND id_barang='$id'");       
    }   
    header('Location:cart.php');
 
?>