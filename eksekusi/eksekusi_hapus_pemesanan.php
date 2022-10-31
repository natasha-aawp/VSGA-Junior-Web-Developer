<?php
include '../koneksi.php';
if (isset($_GET['id_pembeli'])) {
	$id_pembeli = $_GET['id_pembeli'];

	$sql = "DELETE FROM data_pembeli WHERE id_pembeli='$id_pembeli'";
	$query = mysqli_query($koneksi, $sql);
	if ($query) {
		echo "<script>window.alert('Data Berhasil Dibatalkan');window.location=('../data_pemesanan.php');</script>";
	} else {
		die("DATA GAGAL DIBATALKAN");
	}
}
