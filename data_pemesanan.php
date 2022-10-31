<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / Data</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="author" content="Anastasia A.W.P">

    <!-- Favicons -->
    <link href="assets/img/logousm-favicon.png" rel="icon">
    <link href="assets/img/logousm.png" rel="logousm">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?php
    include_once 'header.php';
    ?>

    <!-- ======= Sidebar ======= -->
    <?php
    include_once 'sidebar.php';
    ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tabel Riwayat Pemesanan</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-14">

                    <div class="card">
                        <div class="">
                            <p class="card-title px-3">Data Riwayat Pemesanan Tiket</p>
                            <p class="px-3">Note : <br> Membatalkan Pesanan = Menghapus Data Pesanan</p><br>

                        </div>
                        <div class="card-body">
                            <?php
                            include 'koneksi.php';
                            ?>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pemesanan</th>
                                        <th scope="col">Nomor Identitas</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Tempat Wisata</th>
                                        <th scope="col">Tanggal Kunjungan</th>
                                        <th scope="col">Pengunjung Dewasa</th>
                                        <th scope="col">Pengunjung Anak - Anak</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //memanggil koneksi hosting dan database
                                    include 'koneksi.php';
                                    $no = 1;
                                    //query mysqli untuk menampilkan data
                                    $data = mysqli_query($koneksi, "select * from data_pembeli");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <!-- <th scope="row">2</th> -->
                                            <td type="hidden"><?php echo $no++; ?></td>
                                            <td><?php echo $d['nama_pembeli']; ?></td>
                                            <td><?php echo $d['no_identitas']; ?></td>
                                            <td><?php echo $d['no_hp']; ?></td>
                                            <td><?php echo $d['tempat_wisata']; ?></td>
                                            <td><?php echo $d['tanggal_kunjungan']; ?></td>
                                            <td><?php echo $d['pengunjung_dewasa']; ?></td>
                                            <td><?php echo $d['pengunjung_anak_anak']; ?></td>
                                            </td>
                                            <td>
                                                <a href="eksekusi/eksekusi_hapus_pemesanan.php?id_pembeli=<?= $d['id_pembeli'] ?>" class="btn btn-danger">Dibatalkan</a>
                                            </td>
                                        <?php
                                    }
                                        ?>
                                        </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include_once 'footer.php';
    ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>