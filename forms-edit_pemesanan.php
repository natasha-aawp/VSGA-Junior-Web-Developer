<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Tambah Pemesanan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="author" content="Anastasia A.W.P">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="logo.png" rel="logo">

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
      <h1>Form Penambahan Tiket</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-11">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fomulir Data Pemesanan</h5>

              <!-- Horizontal Form -->
              <form action="eksekusi/eksekusi_tambah_pemesanan.php" method="POST">
                <div hidden class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">id_pembeli</label>
                  <div class="col-sm-10">
                    <input name="id_pembeli" type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-9">
                    <input name="nama_pembeli" type="text" class="form-control" id="inputText" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nomor Identitas</label>
                  <div class="col-sm-9">
                    <input name="no_identitas" type="number" class="form-control" placeholder="Nomor Identitas">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-3 col-form-label">Nomor HP</label>
                  <div class="col-sm-9">
                    <input name="no_hp" type="number" class="form-control" placeholder="Nomor HP">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Tempat Wisata</label>
                  <div class="col-sm-9">
                    <input name="tempat_wisata" type="text" class="form-control" id="inputText" placeholder="Tempat Wisata">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Date" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                  <div class="col-sm-4">
                    <input name="tanggal_kunjungan" type="date" class="form-control" id="Date">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputAddress5" class="col-sm-3 col-form-label">Pengunjung Dewasa</label>
                  <div class="col-sm-9">
                    <input name="pengunjung_dewasa" type="number" class="form-control" id="inputAddres5s" placeholder="Jumlah">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputAddress5" class="col-sm-3 col-form-label">Pengunjung Anak - Anak</label>
                  <div class="col-sm-9">
                    <input name="pengunjung_anak_anak" type="number" class="form-control" id="inputAddres5s" placeholder="Jumlah">
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

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