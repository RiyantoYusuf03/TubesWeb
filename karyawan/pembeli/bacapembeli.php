<?php
  session_start();
  $id = $_SESSION['username'];
?>
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
                      <a href="tambahpembeli.php" class="btn btn-success" align="right"><i class="fa fa-plus"></i> Tambah Pembeli</a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">

                  <table id="dataTable" class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>ID Pembeli</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Pembeli</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

            include '../../koneksi.php';
            $no=1;
            
    $select=mysqli_query($koneksi,"SELECT * FROM tb_pembeli ");
    while ($data = mysqli_fetch_array($select)) 
      {
        ?>
        <tr>
              <!-- <td><?php echo "$no"; ?></td>-->
          <td><?php echo "$data[id_pembeli]"; ?></td>
          <td><?php echo "$data[username]"; ?></td>
          <td><?php echo "$data[password]"; ?></td>
          <td><?php echo "$data[nama_pembeli]"; ?></td>
          <td><?php echo "$data[alamat]"; ?></td> 
          <td><?php echo "$data[no_hp]"; ?></td>

                <td><a href="editpembeli.php?id_pembeli=<?php echo "$data[id_pembeli]"; ?>" class='btn btn-secondary btn-circle'><i class='fa fa-pen'></i></a> |
               <a href="hapus.php?id_pembeli=<?php echo "$data[id_pembeli]"; ?>" class='btn btn-secondary btn-circle'><i class='fa fa-trash'></i></a></td>
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
</body>
</html>