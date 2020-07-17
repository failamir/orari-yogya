<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Orari Lokal Yogyakarta</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/orari-favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/myStyle.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/berita.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/OwlCarousel/dist/assets/owl.carousel.min.css">
  

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

 <!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid">

      <!-- <img src="<?= base_url() ?>assets/img/orari-logo.png" style="width: 50px; height: 50px;position: absolute; margin-left: -80px;" alt=""> -->

      <div class="logo float-left">
        <!-- <h3 class="text-light"><a href="index.html"><span style="font-family:viga;color: #FF8C00;">Orari Lokal Yogyakarta</span></a></h3>
        Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url(); ?>"><img style="width: 50px; height: 50px;" src="<?= base_url() ?>assets/img/orari-logo.png" alt="" class="img-fluid">
          <span style="font-family:viga;color: #FF8C00;">Orari Lokal Yogyakarta</span></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url(); ?>">Home</a></li>
          <li><a href="<?= base_url(); ?>/#about">About Us</a></li>
          <li><a href="<?= base_url(); ?>/#berita">Berita</a></li>
          <li><a href="<?= base_url(); ?>/#download">Download</a></li>
          <li><a href="<?= base_url(); ?>/#services">Juknis</a></li>
          <li><a href="<?= base_url(); ?>/#portfolio">Izin Special Call</a></li>
          <li><a href="<?= base_url(); ?>/#team">Kegiatan</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <!-- End Header -->

  <!-- Jumbotron -->

<div class="jumbotron jumbotron-fluid" style ="height:320px;background-image: linear-gradient(to right, #FF8C00, rgb(255, 176, 80));">
  <div class="container">
  </div>
</div>


<!-- end Jumbotron -->

<!-- card content -->
<div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top:-200px;margin-bottom: 150px;">
  <div class="row">
    <div class="col-12 info-panel">
      <div class="row">
        <div class="col-12" style="padding:0 0 0 0;;">
          <div class="jumbotron jumbotron-fluid" style="border-radius:12px;height:600px;background-image: url('<?=base_url('assets/foto_berita/'.$gambar);?>');background-repeat:no-repeat;background-position:center;background-size:100% 100%;">
            <div class="container">
              
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12" style="padding-bottom:10px;">
          <h2><?= $judul ?></h2>
          <p><?= $date ?></p>
          <span style="color:black;">
          <!-- <img src="<?= base_url() ?>/assets/foto_berita/<?= $gambar ?>" alt="gambar" width="400" height="400">  -->
          <?= $isi ?>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end card content -->


<footer id="footer" style="background-color: rgb(255, 156, 35);;">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KokNgoding</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<!-- Vendor JS Files -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="<?= base_url() ?>assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/OwlCarousel/dist/owl.carousel.min.js"></script>
  

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<!--myJS-->

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>