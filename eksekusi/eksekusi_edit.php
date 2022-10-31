<?php
include '../koneksi.php';
if (isset($_POST['update'])) {
  $id_wisata      = $_POST['id_wisata'];
  $nama           = $_POST['nama'];
  $nim            = $_POST['nim'];
  $email          = $_POST['email'];
  $tanggal_lahir  = $_POST['tanggal_lahir'];
  $alamat         = $_POST['alamat'];


  // query SQL untuk insert data
  $sql = "UPDATE tbl_mhs SET nama='$nama',nim='$nim',email='$email',tanggal_lahir='$tanggal_lahir',alamat='$alamat' where id_wisata='$id_wisata'";

  $query = mysqli_query($koneksi, $sql);
  if ($query) {
    // pesan jika data berubah
    echo "<script>window.alert('Berhasil DI UBAH');window.location=('../tables-data.php');</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>window.alert(Gagal DI UBAH');window.location=('../form-edit.php');</script>";
  }
}else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
header('Location: ../index.php');
}
