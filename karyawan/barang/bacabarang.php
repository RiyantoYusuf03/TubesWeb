
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../style.css">
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body>
   
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <a href="tambahbarang.php" class="btn btn-success" align="right"><i class="fa fa-plus"></i> Tambah Barang</a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                  <form method="POST" action="#" enctype="multipart/form-data">
                  <table id="dataTable" class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

            include '../../koneksi.php';
            $no=1;
            
    $select=mysqli_query($koneksi,"SELECT brg.id_barang, brg.nama_barang, brg.harga, brg.stok, kt.jenis_kategori, brg.gambar FROM tb_barang AS brg INNER JOIN tb_kategori AS kt ON  brg.id_kategori = kt.id_kategori ");
    while ($data = mysqli_fetch_array($select)) 
      {
        ?>
        <tr>
                <td><?php echo "$no"; ?></td> 
        
          <td><?php echo "$data[id_barang]"; ?></td>
          <td><?php echo "$data[nama_barang]"; ?></td> 
          <td><?php echo "$data[harga]"; ?></td>
          <td><?php echo "$data[stok]"; ?></td>
          <td><?php echo "$data[jenis_kategori]"; ?></td>
          <td style="text-align: center;"><img src="../../images/<?php echo $data['gambar']; ?>" style="width: 120px;"></td>

              <td><a href="editbarang.php?id_barang=<?php echo "$data[id_barang]"; ?>" class='btn btn-secondary btn-circle'><i class='fa fa-pen'></i></a> |
               <a href="hapusbarang.php?id_barang=<?php echo "$data[id_barang]"; ?>" class='btn btn-secondary btn-circle'><i class='fa fa-trash'></i></a></td>
        </tr>
              <?php
            $no++;
        }
          ?>            
           </tbody>
      </table>
    </div>
</div>
</div>
</form>
</body>
</html>