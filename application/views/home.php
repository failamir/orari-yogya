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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet">
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
  <!-- <?php var_dump($kegiatan_data) ?> -->
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
          <li><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#download">Download</a></li>
          <li><a href="#services">Juknis</a></li>
          <li><a href="#portfolio">Izin Special Call</a></li>
          <li><a href="#team">Kegiatan</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div>
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Welcome to <br /> <span><?= $nama_perusahaan ?></span></h2>
                <p class="animated fadeInUp"><?= $deskripsi ?></p>
                <a href="#berita" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img style="width:100%;height:100%;" src="<?= base_url() ?>assets/file/<?= $img_about ?>" class="img-fluid" alt="">
            <a href="<?= $link_video ?>" class="venobox play-btn mb-4" data-vbtype="video"
              data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <?= $tentang ?>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Visi</a></h4>
              <?= $visi ?>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Misi</a></h4>
              <?= $misi ?>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <section class="section-bg" id="berita">
  <div class="popular_course">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="section-title">
        <h2>Berita Terbaru</h2>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel" style="margin-left:30px;">
            <?php
            function limit_words($string, $word_limit){
              $words = explode(" ",$string);
              return implode(" ",array_splice($words,0,$word_limit));
          }

            foreach($berita_data as $isna){ ?>
              <div class="card" style="width: 18rem;margin-bottom:50px;height:500px;">
                  <img src="<?= base_url() ?>assets/foto_berita/<?= $isna->gambar ?>" class="card-img-top" alt="...">
                  <div class="card-body" style="overflow:hidden;margin-bottom: 20px">
                    <h6 class="card-title">
                      <a style="color: black;" href="<?= base_url('Berita/detail_berita/'.$isna->id) ?>"><?= $isna->judul ?><?php

                      $ani = $isna->isi; $anis = limit_words($ani, 50);?></a>
                    </h6>
                    <a style="color: black;" href="<?= base_url('Berita/detail_berita/'.$isna->id) ?>">
                    <p class="card-text"><?= $anis ?> ...</p>

                  </div>
                    </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="padding-left: 110px;"><a href="<?= site_url();?>Berita/Lihat_Berita" class="btn" style="color:white;">Lihat lebih banyak</a></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
  </section>

    <!-- ======= About Us Section ======= -->
    <section id="download" class="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
            <div class="section-title">
              <h2>Download</h2>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="nav justify-content-center">
                  <li class="nav-item" style="padding: 5px" data-aos="fade-up" data-aos-delay="100">
                    <button class="btn" style="white-space:nowarp;" data-toggle="modal" data-target=".bd-example-modal-xl">HF 40 M - Phone</button>
                  </li>
                  <li class="nav-item" style="padding: 5px" data-aos="fade-up" data-aos-delay="200">
                    <button class="btn" data-toggle="modal" data-target=".bd-example-modal-x2">Hf 40 M - CW</button>
                  </li>
                  <li class="nav-item" style="padding: 5px" data-aos="fade-up" data-aos-delay="300">
                    <button class="btn" data-toggle="modal" data-target=".bd-example-modal-x3">Hf 40 M - FT 8</button>
                  </li>
                  <li class="nav-item" style="padding: 5px;" data-aos="fade-up" data-aos-delay="400">
                    <button class="btn" data-toggle="modal" data-target=".bd-example-modal-x4">VHF 2 M</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section><!-- End About Us Section -->



    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="row">
              <div class="col-lg-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
            foreach ($download_data_phone as $data)
            {
                ?>
                    <tr>
                      <td width="80px"><?php echo ++$start ?></td>
                      <td><?php echo $data->callsign ?></td>
                      <td><?php echo $data->checkin ?></td>
                      <!-- <td><?php echo $data->nama ?></td> -->
                      <td><?php echo $data->counter ?></td>
                      <td>
                        <a target="blank" href="./assets/file/<?php echo $data->file ?>">
                          <a class="btn btn-sm btn-info download" target="blank"
                            href="<?= site_url() ?>Download/count/<?= $data->id ?>/<?php echo $data->file ?>">
                            Download</a></a>
                      </td>

                    </tr>
                    <?php
            }
            ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-x2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="row">
              <div class="col-lg-12">
                <table id="example2" class="table table-striped table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
            foreach ($download_data_cw as $data)
            {
                ?>
                    <tr>
                      <td width="80px"><?php echo ++$start ?></td>
                      <td><?php echo $data->callsign ?></td>
                      <td><?php echo $data->checkin ?></td>
                      <!-- <td><?php echo $data->nama ?></td> -->
                      <td><?php echo $data->counter ?></td>
                      <td>
                        <a target="blank" href="./assets/file/<?php echo $data->file ?>">
                          <a class="btn btn-sm btn-info download" target="blank"
                            href="<?= site_url() ?>Download/count/<?= $data->id ?>/<?php echo $data->file ?>">
                            Download</a></a>
                      </td>

                    </tr>
                    <?php
            }
            ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="row">
              <div class="col-lg-12">
                <table id="example3" class="table table-striped table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
            foreach ($download_data_ft as $data)
            {
                ?>
                    <tr>
                      <td width="80px"><?php echo ++$start ?></td>
                      <td><?php echo $data->callsign ?></td>
                      <td><?php echo $data->checkin ?></td>
                      <!-- <td><?php echo $data->nama ?></td> -->
                      <td><?php echo $data->counter ?></td>
                      <td>
                        <a target="blank" href="./assets/file/<?php echo $data->file ?>">
                          <a class="btn btn-sm btn-info download" target="blank"
                            href="<?= site_url() ?>Download/count/<?= $data->id ?>/<?php echo $data->file ?>">
                            Download</a></a>
                      </td>

                    </tr>
                    <?php
            }
            ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-x4" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="row">
              <div class="col-lg-12">
                <table id="example4" class="table table-striped table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
            foreach ($download_data_m as $data)
            {
                ?>
                    <tr>
                      <td width="80px"><?php echo ++$start ?></td>
                      <td><?php echo $data->callsign ?></td>
                      <td><?php echo $data->checkin ?></td>
                      <!-- <td><?php echo $data->nama ?></td> -->
                      <td><?php echo $data->counter ?></td>
                      <td>
                        <a target="blank" href="./assets/file/<?php echo $data->file ?>">
                          <a class="btn btn-sm btn-info download" target="blank"
                            href="<?= site_url() ?>Download/count/<?= $data->id ?>/<?php echo $data->file ?>">
                            Download</a></a>
                      </td>

                    </tr>
                    <?php
            }
            ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Callsign</th>
                      <th>Checkin</th>
                      <!-- <th>Kategori</th> -->
                      <th>Counter</th>
                      <th>Download</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Juknsi</h2>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="embed-responsive embed-responsive-4by3">
              <!-- <iframe src="./tes.pdf" class="embed-responsive-item"></iframe> -->
              <iframe src="./assets/file/<?= $juknsi ?>" class="embed-responsive-item"></iframe>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Izin Special Call</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="embed-responsive embed-responsive-4by3">
              <!-- <iframe src="./tes.pdf" class="embed-responsive-item"></iframe> -->
              <iframe src="./assets/file/<?= $izin ?>" class="embed-responsive-item"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Detail Kegiatan</h2>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <ul class="nav justify-content-center">
                    <li class="nav-item" style="padding: 5px;">
                      <svg width="36" height="36" style="color: orange;" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="calendar-check" class="svg-inline--fa fa-calendar-check fa-w-14"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                          d="M436 160H12c-6.627 0-12-5.373-12-12v-36c0-26.51 21.49-48 48-48h48V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h128V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h48c26.51 0 48 21.49 48 48v36c0 6.627-5.373 12-12 12zM12 192h424c6.627 0 12 5.373 12 12v260c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V204c0-6.627 5.373-12 12-12zm333.296 95.947l-28.169-28.398c-4.667-4.705-12.265-4.736-16.97-.068L194.12 364.665l-45.98-46.352c-4.667-4.705-12.266-4.736-16.971-.068l-28.397 28.17c-4.705 4.667-4.736 12.265-.068 16.97l82.601 83.269c4.667 4.705 12.265 4.736 16.97.068l142.953-141.805c4.705-4.667 4.736-12.265.068-16.97z">
                        </path>
                      </svg>
                    </li>
                    <li class="nav-item" style="padding: 5px;">
                      <h4>Hari, Tanggal Kegiatan</h4>
                      <?php
                      // var_dump($kegiatan_data);
                        foreach ($kegiatan_data as $data)
                        {
                            ?>
                      <?php if($data->hari==NULL){ echo "-";}else{ ?>
                      <p><?= $data->hari ?>, <?= $data->tanggal; } ?></p><hr>
                      <?php
                        }
                        ?>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <ul class="nav justify-content-center">
                    <li class="nav-item" style="padding: 5px;">
                      <svg width="36" height="36" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                          d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
                        </path>
                      </svg>
                    </li>
                    <li class="nav-item" style="padding: 5px;">
                      <h4>Waktu Kegiatan</h4>
                      <ul>
                        <?php
                        foreach ($kegiatan_data as $data)
                        {
                            ?>
                        <li><?= $data->mulai ?> - <?= $data->selesai ?> WIB atau <?= $data->detail ?></li><hr>
                        <?php
                        }
                        ?>

                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Our Team Section -->
  </main>
  <br><!-- End #main -->


  <!-- ======= Footer ======= -->
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

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



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

  <script type="text/javascript">
    $(document).ready(function () {
      $('#example').DataTable();
    });

    $(document).ready(function () {
      $('#example2').DataTable();
    });

    $(document).ready(function () {
      $('#example3').DataTable();
    });

    $(document).ready(function () {
      $('#example4').DataTable();
    });
  </script>

  <script type="text/javascript">
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      items: 3,
      loop: true,
      margin: 20,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          autoplayTimeout: 1000,
          autoplayHoverPause: true
        },
        600: {
          items: 3
        },
        1000: {
          items: 3
        }
      }
    });
  </script>


</body>

</html>
