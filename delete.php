<?php   
require_once "koneksi.php";
mysqli_query($kon, "DELETE FROM produk WHERE id_produk = '$_GET[id_produk]' ") 
			or die (mysqli_errno($kon));

echo "<script>alert('Data Produk Yang Anda Pilih Berhasil Dihapus'); window.location='index.php'</script>";
?>