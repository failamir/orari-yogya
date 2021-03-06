<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Orai Lokal Yogyakarta</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
  <link href="<?= base_url() ?>assets/img/orari-favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url('resources');?>/plugins/fontawesome-free/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>

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
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?= base_url() ?>index.html"><span>Orari Lokal Yogyakarta</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="<?= base_url() ?>index.html"><img src="<?= base_url() ?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url() ?>#header">Home</a></li>
          <li><a href="<?= base_url() ?>#about">About Us</a></li>
          <li><a href="<?= base_url() ?>#download">download</a></li>
          <li><a href="<?= base_url() ?>#services">Juknis</a></li>
          <li><a href="<?= base_url() ?>#portfolio">Izin Special Call</a></li>
          <li><a href="<?= base_url() ?>#team">Kegiatan</a></li>
          <li><a href="<?= base_url() ?>#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div>

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Welcome to <span><?= $nama_perusahaan ?></span></h2>
                <p class="animated fadeInUp"><?= $deskripsi ?></p>
                <a href="<?= base_url() ?>#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
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
            <img src="<?= base_url() ?>assets/img/about.jpg" class="img-fluid" alt="">
            <a href="<?= base_url() ?>https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="<?= base_url() ?>">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="<?= base_url() ?>">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

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
                    <li class="nav-item" style="padding: 5px;" data-aos="fade-up" data-aos-delay="100">
                        <button  class="btn btn-primary "  data-toggle="modal" data-target="#myModal">HF 40 M - Phone</button>
                    </li>
                    <li class="nav-item" style="padding: 5px;" data-aos="fade-up" data-aos-delay="200">
                        <button  class="btn btn-primary "  data-toggle="modal" data-target="#myModal">Hf 40 M - CW</button>  
                    </li>
                    <li class="nav-item" style="padding: 5px;" data-aos="fade-up" data-aos-delay="300">
                        <button class="btn btn-primary " data-toggle="modal" data-target="#myModal">Hf 40 M - FT 8</button>
                    </li>
                    <li class="nav-item" style="padding: 5px;" data-aos="fade-up" data-aos-delay="400">
                        <button class="btn btn-primary"  data-toggle="modal" data-target="#myModal">VHF 2 M</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
         <div class="container">
           <div class="row">
             <div class="col-lg-12">
             <div class="box-tools float-right ">
                <form action="<?php echo site_url('download/index'); ?>" class="form-inline" method="get">
                    <div class="input-group" style="margin: 15px">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('download'); ?>" class="btn btn-flat btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-flat btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="box-body text-center" style="margin: 15px;
  display: flex;
  flex-wrap: wrap;
  align-content: center;">
        
        <table class="table table-bordered" style="margin-bottom: 10px;margin-top:10px">
            <tr>
                <th>No</th>
		<th>Callsign</th>
		<th>Checkin</th>
		<th>Counter</th>
		<th>Status</th>
		<th>Aksi</th>
            </tr><?php
            foreach ($download_data as $download)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $download->callsign ?></td>
			<td><?php echo $download->checkin ?></td>
			<td><?php echo $download->counter ?></td>
			<td><?php echo $download->status ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('download/read/'.$download->id),'<i class="fa fa-eye"></i>','class="btn btn-flat btn-info"'); 
				echo '  '; 
				echo anchor(site_url('download/update/'.$download->id),'<i class="fa fa-edit"></i>','class="btn btn-flat btn-warning"'); 
				echo '  '; 
				echo anchor(site_url('download/delete/'.$download->id),'<i class="fa fa-trash"></i>','class="btn btn-flat btn-danger"','onclick="javasciprt: return confirm(\'Anda Yakin ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
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
              <iframe src="<?= base_url() ?>./tes.pdf" class="embed-responsive-item"></iframe>
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
              <iframe src="<?= base_url() ?>./tes.pdf" class="embed-responsive-item"></iframe>
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
                <div class="col-md-6"  data-aos="fade-up" data-aos-delay="100">
                  <ul class="nav justify-content-center">
                    <li class="nav-item" style="padding: 5px;">
                      <svg width="36" height="36" style="color: orange;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-check" class="svg-inline--fa fa-calendar-check fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M436 160H12c-6.627 0-12-5.373-12-12v-36c0-26.51 21.49-48 48-48h48V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h128V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h48c26.51 0 48 21.49 48 48v36c0 6.627-5.373 12-12 12zM12 192h424c6.627 0 12 5.373 12 12v260c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V204c0-6.627 5.373-12 12-12zm333.296 95.947l-28.169-28.398c-4.667-4.705-12.265-4.736-16.97-.068L194.12 364.665l-45.98-46.352c-4.667-4.705-12.266-4.736-16.971-.068l-28.397 28.17c-4.705 4.667-4.736 12.265-.068 16.97l82.601 83.269c4.667 4.705 12.265 4.736 16.97.068l142.953-141.805c4.705-4.667 4.736-12.265.068-16.97z"></path></svg>
                    </li>
                    <li class="nav-item" style="padding: 5px;">
                      <h4>Hari, Tanggal Kegiatan</h4>
                      <p>Senin, 07 Oktober 2019</p>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6"  data-aos="fade-up" data-aos-delay="200">
                  <ul class="nav justify-content-center">
                    <li class="nav-item" style="padding: 5px;">
                      <svg width="36" height="36" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path></svg>
                    </li>
                    <li class="nav-item" style="padding: 5px;">
                      <h4>Waktu Kegiatan</h4>
                      <ol>
                        <li>15:00 - 22:00 WIB atau 08:00 - 15:00 UTC HF 40 M - Phone</li>
                        <li>15:00 - 22:00 WIB atau 08:00 - 15:00 UTC HF 40 M - Phone</li>
                        <li>15:00 - 22:00 WIB atau 08:00 - 15:00 UTC HF 40 M - Phone</li>
                        <li>15:00 - 22:00 WIB atau 08:00 - 15:00 UTC HF 40 M - Phone</li>
                      </ol>
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

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact Us</h2>
      </div>

      <div class="row">

        <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>info@example.com<br>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="info-box ">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
          </div>
        </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KokNgoding</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="<?= base_url() ?>https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="<?= base_url() ?>#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>
  <!--myJS-->

  <script src="<?= base_url() ?>https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#example").DataTable();
    });
  </script>

  

</body>

</html>