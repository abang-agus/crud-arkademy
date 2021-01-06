<?php require_once 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Data Produk</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 text-center">Data Produk Pada Toko Komputer Arkademy</h1>
        <p class="lead text-center">Jl. Arkademy</p>
      </div>
    </div>
    <div style="padding-left: 20px; margin-bottom: 20px;">
        <a href="tambah.php" class="btn btn-success btn-sm"> Tambah Data </a>
    </div>
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Harga</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
       <?php
          $no = 1;  
          $query = mysqli_query($kon, "SELECT * FROM produk");

          while ($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <td><?= $no++; ?>.</td>
            <td><?= $data['nama_produk']; ?></td>
            <td><?= $data['keterangan']; ?></td>
            <td><?= $data['harga']; ?></td>
            <td><?= $data['jumlah']; ?></td>
            <td>
                <a href="edit.php?id_produk=<?=$data['id_produk']?>" class="btn btn-warning btn-sm">edit </a> ||
                <a href="delete.php?id_produk=<?=$data['id_produk']?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data Produk Ini ?');">hapus</a>
            </td> 
          </tr>
        <?php } ?>  
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>