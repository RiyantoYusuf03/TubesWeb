<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP MySQLi | TUTORIALWEB.NET</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="crud.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container" style="margin-top:20px">
        <h2>Edit Barang</h2>
        
        <hr>
        
        <?php
        //jika sudah mendapatkan parameter GET id dari URL
        if(isset($_GET['id_barang'])){
            //membuat variabel $id untuk menyimpan id dari GET id di URL
            $id = $_GET['id_barang'];
            
            //query ke database SELECT tabel mahasiswa berdasarkan id = $id
            $select = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'") or die(mysqli_error($koneksi));
            
            //jika hasil query = 0 maka muncul pesan error
            if(mysqli_num_rows($select) == 0){
                echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
                exit();
            //jika hasil query > 0
            }else{
                //membuat variabel $data dan menyimpan data row dari query
                $data = mysqli_fetch_assoc($select);
            }
        }
        ?>
        
        <form action="proses_edit.php?id_barang=<?php echo $id_barang; ?>" method="post">
         <?php
        //jika tombol simpan di tekan/klik
        if(isset($_POST['submit'])){
            $id_barang      = $_POST['id_barang'];
            $id_kategori    = $_POST['id_kategori'];
            $nama_barang    = $_POST['nama_barang'];
            $harga          = $_POST['harga'];
            $stok           = $_POST['stok'];
            
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang', id_kategori='$id_kategori', nama_barang='$nama_barang', harga ='$harga', stok='$stok'") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id_barang='.$id_barang.'";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
        }
        ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Barang</label>
                <div class="col-sm-10">
                    <input type="text" name="id_barang" class="form-control" size="4" value="<?php echo $data['id_barang']; ?>" readonly required />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Kategori</label>
                <div class="col-sm-10">
                    <input type="text" name="id_kategori" class="form-control" value="<?php echo $data['id_kategori']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang']; ?>" required />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="text" name="stok" class="form-control" value="<?php echo $data['stok']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    <a href="crud.php" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>