<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Orari Lokal Yogyakarta</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/orari-favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/myStyle.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/berita.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.carousel.min.css') }}">
  

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

      <!--<img src="{{ asset('assets/img/orari-logo.png') }}" style="width: 50px; height: 50px;position: absolute; margin-left: -80px;" alt="">-->

      <div class="logo float-left">
        <!-- <h3 class="text-light"><a href="index.html"><span style="font-family:viga;color: #FF8C00;">Orari Lokal Yogyakarta</span></a></h3>
        Uncomment below if you prefer to use an image logo -->
        <a href="<?= URL::to('/'); ?>"><img style="width: 50px; height: 50px;" src="{{ asset('assets/img/orari-logo.png') }}" alt="" class="img-fluid">
          <span style="font-family:viga;color: #FF8C00;">Orari Lokal Yogyakarta</span></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="<?= url::to('/'); ?>">Home</a></li>
          <li><a href="<?= url::to('/'); ?>/#about">About Us</a></li>
          <li><a href="<?= url::to('/'); ?>/#berita">Berita</a></li>
          <li><a href="<?= url::to('/'); ?>/#download">Download</a></li>
          <li><a href="<?= url::to('/'); ?>/#services">Juknis</a></li>
          <li><a href="<?= url::to('/'); ?>/#portfolio">Izin Special Call</a></li>
          <li><a href="<?= url::to('/'); ?>/#team">Kegiatan</a></li>
        </ul>
      </nav>

    </div>
  </header>
  
  <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= url::to('/'); ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Berita</li>
			</ol>
		</nav>

  <!-- End Header -->

  <!-- Jumbotron -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col berita" style="margin-left:75px;">
      <?php 
      function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
      foreach($berita as $isna){ ?>
        <div class="card" style="width: 18rem;display:inline-flex;margin: 10px;height:467px;width:287;">
        <img src="@if($isna->gambar == null)
                  {{ asset('storage/img_berita/default.png') }}
                  @else
                  {{ asset('storage/'. $isna->gambar) }}
                  @endif" class="card-img-top" alt="...">
                  <div class="card-body" style="overflow:hidden;margin-bottom: 20px">
                    <h6 class="card-title">
                    <a style="color: black;" href="<?= url::to('Berita/detail_berita/'.$isna->id);?>"><?= $isna->judul ?><?php
                      
                      $ani = $isna->konten; $anis = limit_words($ani, 10);?></a>
                    </h6>
                    <p class="card-text"><?= $anis ?></p>
            </div>
        </div>
      <?php } ?>
          
      </div>
    </div>
    <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                  <ul class="nav justify-content-center">
                    <li class="nav-item" style="padding: 5px;">
                      <div class="pagination-wrapper"> {!! $berita->appends(['search' => Request::get('search')])->render() !!} </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>


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
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/OwlCarousel/dist/owl.carousel.min.js') }}"></script>
  

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!--myJS-->

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>