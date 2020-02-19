<?php
session_start();
$sid = $_SESSION['id_pembeli'];
$total = 0;
$nomor = 1;

include "koneksi.php";
// fungsi untuk mendapatkan isi keranjang belanja
function datakeranjang(){
  $koneksi=mysqli_connect("localhost", "root", "", "sparepart1");
    $datakeranjang = array();
    $sid = $_SESSION['id_pembeli'];
    $sql = "SELECT * FROM keranjang WHERE id_pembeli='$sid'";
    $query= mysqli_query($koneksi,$sql);
     
    while ($r = mysqli_fetch_array($query)) {
           $datakeranjang[] = $r;
    }
    return $datakeranjang;
}  
 
$tgl_skrg = date("y-m-d H:i:s");
 
// simpan data pemesanan 
mysqli_query($koneksi, "INSERT INTO transaksi(id_transaksi, id_pembeli, tanggal_transaksi, status) VALUES ('','$sid', '$tgl_skrg', 'sedang diproses')");
 
// mendapatkan nomor orders dari tabel pembelian
   $id_orders=mysqli_insert_id($koneksi);
 
// panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
$datakeranjang = datakeranjang();
$jml          = count($datakeranjang);
 
// simpan data detail pemesanan  
for ($i = 0; $i < $jml; $i++){
  mysqli_query($koneksi, "INSERT INTO detail_transaksi(id_transaksi, id_barang, jumlah) VALUES('$id_orders',{$datakeranjang[$i]['id_barang']}, {$datakeranjang[$i]['jumlah']})");
}
   
// setelah data pemesanan tersimpan, hapus data pemesanan di tabel keranjang
//for ($i = 0; $i < $jml; $i++) { mysqli_query("DELETE FROM keranjang WHERE id_belanja = {$datakeranjang[$i]['id_belanja']}");}
 
 
 echo"Nomor Order: <b>$id_orders</b><br /><br />";
 
echo"<h1>Rincian Belanja</h1>
          <table border=1>
          <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah </th>
                <th>Sub Total</th>
          </tr>
          ";    
$sql=mysqli_query($koneksi, "SELECT * FROM detail_transaksi, tb_barang WHERE detail_transaksi.id_barang=tb_barang.id_barang AND id_transaksi='$id_orders' ");
   
while($datakeranjang=mysqli_fetch_array($sql)){
        $subtotal    = $datakeranjang['harga'] * $datakeranjang['jumlah'];
        $total       = $total + $subtotal;
        echo"<tr>
                <td>".$nomor."</td>
                <td>".$datakeranjang['nama_barang']."</td>
                <td>".$datakeranjang['harga']."</td>
                <td>".$datakeranjang['jumlah']."</td>
                <td>".$subtotal."</td>
                </tr>";
                $nomor++;
  }
?>
</table>
<h2>Total Belanja : <b><?php echo "$total"; ?></b></h2>
