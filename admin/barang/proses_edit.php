<?php

include_once("koneksi.php");

if(isset($_POST['simpan'])){
    $id_barang      = $_POST['id_barang'];
            $id_kategori    = $_POST['id_kategori'];
            $nama_barang    = $_POST['nama_barang'];
            $harga          = $_POST['harga'];
            $stok           = $_POST['stok'];

    $query = "UPDATE tb_barang SET id_kategori='$id_kategori', nama_barang='$nama_barang', harga='$harga', stok='$stok' where id_barang='$id_barang'";
    $sql = mysqli_query($koneksi,$query);
    if($sql ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>