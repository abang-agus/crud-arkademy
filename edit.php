<?php require_once 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tambah Data Produk</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Edit Data Produk</h1>
        <p class="lead text-center">Berikut adalah form untuk mengedit data produk</p>
      </div>
    </div>
    <?php  
      $id = @$_GET['id_produk'];
      $sql = mysqli_query($kon, "SELECT * FROM produk WHERE id_produk = '$id' ") 
        or die (mysqli_error($kon));
      $data = mysqli_fetch_array($sql);
    ?>
    <form method="post" action="proses.php">
    <div class="form-group">
      <label for="nama">Nama Produk</label>
      <input type="hidden" name="id_produk" value="<?=$data['id_produk']?>">
      <input type="teks" name="nama" class="form-control col-sm-3" value="<?=$data['nama_produk']?>" required>
    </div>
    <div class="form-group">
      <label for="keterangan">Keterangan</label>
      <input type="teks" name="keterangan" class="form-control col-sm-3" value="<?=$data['keterangan']?>" required>
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="number" name="harga" class="form-control col-sm-3" value="<?=$data['harga']?>" required>
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="number" name="jumlah" class="form-control col-sm-3" value="<?=$data['jumlah']?>" required>
    </div>
    <div class="form-group">
      <a href="index.php" class="btn btn-danger btn-sm"> Kembali </a> ||
      <input type="submit" name="edit" class="btn btn-primary btn-sm" value="Update">
    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>