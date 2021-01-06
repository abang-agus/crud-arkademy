<?php   
require_once "koneksi.php";

if (isset($_POST['tambah'])) { // Jika tambah data skrip ini yang akan dieksekusi

	$nama 		= trim(mysqli_real_escape_string($kon, $_POST['nama']));
    $keterangan = trim(mysqli_real_escape_string($kon, $_POST['keterangan']));
    $harga 		= trim(mysqli_real_escape_string($kon, $_POST['harga']));
	$jumlah 	= trim(mysqli_real_escape_string($kon, $_POST['jumlah']));

	mysqli_query($kon, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) 
		VALUES('$nama', '$keterangan', '$harga', '$jumlah')") or die (mysqli_error($kon));

	echo "<script>alert('Data Produk Berhasil Ditambah');window.location='index.php'</script>";
} elseif (isset($_POST['edit'])) {
	$id 		= $_POST['id_produk'];
	$nama 		= trim(mysqli_real_escape_string($kon, $_POST['nama']));
    $keterangan = trim(mysqli_real_escape_string($kon, $_POST['keterangan']));
    $harga 		= trim(mysqli_real_escape_string($kon, $_POST['harga']));
	$jumlah 	= trim(mysqli_real_escape_string($kon, $_POST['jumlah']));

	mysqli_query($kon, "UPDATE produk 
	SET nama_produk = '$nama', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah'
	WHERE id_produk = '$id' ") or die (mysqli_error($kon));

	echo "<script>alert('Data Produk Berhasil Di Update');window.location='index.php'</script>";
}
?>