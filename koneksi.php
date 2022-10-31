<?php
$hosting = "localhost";
$username = "root";
$password = "";
$database = "pesan_tiket";
$koneksi = mysqli_connect("$hosting", "$username", "$password", "$database");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
