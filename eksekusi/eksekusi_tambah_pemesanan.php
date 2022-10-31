<?php
include "../koneksi.php";
//cek button
if ($_POST['Submit'] == "Submit") {
    $id_pembeli         = $_POST['id_pembeli'];
    $nama_pembeli       = $_POST['nama_pembeli'];
    $no_identitas       = $_POST['no_identitas'];
    $no_hp              = $_POST['no_hp'];
    $tempat_wisata      = $_POST['tempat_wisata'];
    $tanggal_kunjungan  = $_POST['tanggal_kunjungan'];
    $pengunjung_dewasa  = $_POST['pengunjung_dewasa'];
    $pengunjung_anak_anak = $_POST['pengunjung_anak_anak'];


    $perintah = "INSERT INTO data_pembeli(id_pembeli,nama_pembeli,no_identitas,no_hp,tempat_wisata,tanggal_kunjungan,pengunjung_dewasa,pengunjung_anak_anak) VALUES('$id_pembeli','$nama_pembeli','$no_identitas','$no_hp','$tempat_wisata','$tanggal_kunjungan','$pengunjung_dewasa','$pengunjung_anak_anak')";
    $cek = mysqli_query($koneksi, $perintah); // Eksekusi/ Jalankan query dari variabel $perintah
    if ($cek) { // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: ../data_pemesanan.php"); // Redirect ke halaman data_pemesanan.php
    } else {
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database";
        echo "<br><a href='../index.php'>Kembali Ke Form</a>";
    }
}
