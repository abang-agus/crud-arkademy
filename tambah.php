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
        <h1 class="display-4 text-center">Tambah Data Produk</h1>
        <p class="lead text-center">Berikut adalah Form Untuk mengisi data produk</p>
      </div>
    </div>
    
   <form method="post" action="proses.php">
    <div class="form-group">
      <label for="nama_produk">Nama Produk</label>
      <input type="teks" name="nama" class="form-control col-sm-3" id="nama" required="">
    </div>
    <div class="form-group">
      <label for="keterangan">Keterangan</label>
      <input type="teks" name="keterangan" class="form-control col-sm-3" id="keterangan" required>
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="number" name="harga" class="form-control col-sm-3" id="harga" required>
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="number" name="jumlah" class="form-control col-sm-3" id="jumlah" required>
    </div>
    <div class="form-group">
      <input type="submit" name="tambah" class="btn btn-primary btn-sm" value="tambah">
    </div>
    
  </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>