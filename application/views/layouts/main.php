<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php if(isset($meta_description)){ echo ucfirst($meta_description);}?>">
	<meta name="keywords" content="<?php if(isset($meta_keywords)){ echo ucfirst($meta_keywords);}?>">
	<meta name="author" content="Andhika Putra Pratama">
	<link rel="icon" href="<?php if(isset($logos)){ echo base_url($logos); }?>" />
	<title><?php if(isset($web_name)){ echo ucfirst($web_name); }?> | <?php if(isset($title)){ echo ucfirst($title); }?>
	</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet"
		href="<?php echo base_url('resources');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"
		href="<?php echo base_url('resources');?>/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('resources');?>/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url('resources');?>/bower_components/select2/dist/css/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('resources');?>/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('resources');?>/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url('resources');?>/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url('resources');?>/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet"
		href="<?php echo base_url('resources');?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet"
		href="<?php echo base_url('resources');?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet"
		href="<?php echo base_url('resources');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?php echo base_url('resources');?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		
		<script src="https://cdn.tiny.cloud/1/t4g9b5tsx6fq7gwinyh9j4hsgzdpn5stgvph899qokjbcu5t/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>
		
</head>

<body class="hold-transition skin-black-light sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><?php if(isset($web_name)){ echo $web_name;}?></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<!-- <img src="<?php echo base_url('resources')?>/dist/img/user-icon.png" class="user-image"
				  alt="User Image"> -->
				  <img src="<?php if($usr->foto != NULL){
            echo base_url('assets/foto_profil/'.$usr->foto.'');
          }else{echo base_url('assets/foto_profil/default.png');} ?>" class="img-circle" style="width:20px;height:20px" alt="User Image">
                  <?php if($usr == null){ redirect ('/auth');} ?>
								<span class="hidden-xs"><?php echo $usr->first_name;?></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
								<img src="<?php if($usr->foto != NULL){
            echo base_url('assets/foto_profil/'.$usr->foto.'');
          }else{echo base_url('assets/foto_profil/default.png');} ?>" class="img-circle" style="width:100px;height:100px" alt="User Image">
									<p>
										<?php echo $usr->first_name; 
						echo '&nbsp;';
						echo $usr->last_name;				  
						echo '<small>' .$usr->email. '</small>';
				  ?>
									</p>
								</li>
								<!-- Menu Body -->

								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="<?= site_url('auth/edit_user/'.$usr->id)?>" class="btn btn-default btn-flat">Profil</a>
									</div>
									<div class="pull-right">
										<?php echo anchor('auth/logout', 'Keluar', array('class' => 'btn btn-flat btn-default'));?>
									</div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
						<li>
							<a href="<?= site_url('auth/logout') ?>"><i class="fa fa-sign-out"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
					<img src="<?php if($usr->foto != NULL){
            echo base_url('assets/foto_profil/'.$usr->foto.'');
          }else{echo base_url('assets/foto_profil/default.png');} ?>" class="img-circle" style="width:50px;height:50px" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?php echo $usr->first_name;?></p>
						<?php
				$ip = "127.0.0.1"; //IP atau website
				$port = "80"; //Port
				$sock = @fsockopen( $ip, $port, $num, $error, 2 ); //2 waktu ping
				if( !$sock ){
					//Jika Port Tertutup
					echo( '<a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>');
				}
				if( $sock ){
					//Jika Port Terbuka
					echo( '<a href="#"><i class="fa fa-circle text-success"></i> Online</a>' );
					fclose($sock);
				}
			?>

					</div>
				</div>
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
          <?php if ($title == "Beranda") { ?>
          <li class="active"><?php echo anchor('dashboard','<i class="fa fa-dashboard"></i><span> Beranda</span>');?></li>
          <?php }else{ ?>
            <li><?php echo anchor('dashboard','<i class="fa fa-dashboard"></i><span> Beranda</span>');?></li>
          <?php } ?>
          
					<?php if ($title == "berita") { ?>
					<li class="active"><?php echo anchor('berita','<i class="fa fa-globe"></i><span> Berita</span>');?></li>
					<?php }else{ ?>
					<li><?php echo anchor('berita','<i class="fa fa-globe"></i><span> Berita</span>');?></li>
					<?php } ?>
            <!-- <?= $title ?> -->
					<?php if ($title == "download") { ?>
					<li class="active"><?php echo anchor('download','<i class="fa fa-download"></i><span> Download</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('download','<i class="fa fa-download"></i><span> Download</span>');?></li>
					<?php } ?>

          <?php if ($title == "kategori") { ?>
					<li class="active"><?php echo anchor('kategori','<i class="fa fa-list"></i><span> Kategori</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('kategori','<i class="fa fa-list"></i><span> Kategori</span>');?></li>
          <?php } ?>
          
          <?php if ($title == "landing") { ?>
					<li class="active"><?php echo anchor('landing','<i class="fa fa-pagelines"></i><span> Landing</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('landing','<i class="fa fa-pagelines"></i><span> Landing</span>');?></li>
          <?php } ?>

          <?php if ($title == "tanggal_kegiatan") { ?>
					<li class="active"><?php echo anchor('tanggal_kegiatan','<i class="fa fa-calendar"></i><span> Tanggal Kegiatan</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('tanggal_kegiatan','<i class="fa fa-calendar"></i><span> Tanggal Kegiatan</span>');?></li>
          <?php } ?>

          <?php if ($title == "waktu_kegiatan") { ?>
					<li class="active"><?php echo anchor('waktu_kegiatan','<i class="fa fa-calendar-o"></i><span> Waktu Kegiatan</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('waktu_kegiatan','<i class="fa fa-calendar-o"></i><span> Waktu Kegiatan</span>');?></li>
          <?php } ?>

          <?php if ($this->ion_auth->is_admin())
		        { ?>
          <?php if ($title == "Pengguna") { ?>
					<li class="active"><?php echo anchor('auth/index','<i class="fa fa-users"></i><span> Atur Pengguna</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('auth/index','<i class="fa fa-users"></i><span> Atur Pengguna</span>');?></li>
          <?php } ?>

          <?php if ($title == "Ubah identitas web") { ?>
					<li class="active"><?php echo anchor('identitas_web','<i class="fa fa-superpowers"></i><span> Atur Identitas Web</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('identitas_web','<i class="fa fa-superpowers"></i><span> Atur Identitas Web</span>');?></li>
          <?php } ?>

          <?php if ($title == "log_aktivitas") { ?>
					<li class="active"><?php echo anchor('log_aktivitas','<i class="fa fa-history"></i><span> Log Aktivitas</span>');?>
					</li>
					<?php }else{ ?>
					<li><?php echo anchor('log_aktivitas','<i class="fa fa-history"></i><span> Log Aktivitas</span>');?></li>
          <?php } ?>

          <?php if ($title == "Ganti Kata Sandi") { ?>
					<li class="active"><?php echo anchor('auth/change_password','<i class="fa fa-key"></i><span> Ganti Kata Sandi</span>');?>
          </li>
          <?php }else{ ?>
            <li><?php echo anchor('auth/change_password','<i class="fa fa-key"></i><span> Ganti Kata Sandi</span>');?>
		  <?php } ?>
		  
		  <?php if ($title == "Ganti Foto Profil") { ?>
					<li class="active"><?php echo anchor('auth/edit_foto','<i class="fa fa-image"></i><span> Ganti Foto Profil</span>');?>
          </li>
          <?php }else{ ?>
            <li><?php echo anchor('auth/edit_foto','<i class="fa fa-image"></i><span> Ganti Foto Profil</span>');?>
          <?php } ?>

		  <!-- <?php var_dump($title) ?> -->
          <?php } ?>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 660px;">
			<!-- Main content -->
			<?php                    
            if(isset($_view) && $_view)
               $this->load->view($_view);
            ?>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>AdminLTE Version 2.4.0</b> | Page rendered in <strong>{elapsed_time}</strong> seconds.
			</div>
			<strong>Copyright &copy; <?php echo date('Y')?> <a
					href="<?php echo base_url();?>"><?php if (isset($copyrights)){ echo $copyrights;}?></a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane" id="control-sidebar-home-tab">

				</div>
		</aside>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url('resources');?>/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url('resources');?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button);

		$(function () {
			//Initialize Select2 Elements
			$('.select2').select2()
		})

	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('resources');?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="<?php echo base_url('resources');?>/bower_components/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url('resources');?>/bower_components/morris.js/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url('resources');?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js">
	</script>
	<!-- Select2 -->
	<script src="<?php echo base_url('resources');?>/bower_components/select2/dist/js/select2.full.min.js"></script>
	<!-- jvectormap -->
	<script src="<?php echo base_url('resources');?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url('resources');?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url('resources');?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url('resources');?>/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url('resources');?>/bower_components/bootstrap-daterangepicker/daterangepicker.js">
	</script>
	<!-- datepicker -->
	<script
		src="<?php echo base_url('resources');?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
	</script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url('resources');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js">
	</script>
	<!-- Slimscroll -->
	<script src="<?php echo base_url('resources');?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js">
	</script>
	<!-- FastClick -->
	<script src="<?php echo base_url('resources');?>/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('resources');?>/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url('resources');?>/dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url('resources');?>/dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url('resources');?>/bower_components/datatables.net/js/jquery.dataTables.min.js">
	</script>
	<script src="<?php echo base_url('resources');?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
	</script>
</body>

</html>
