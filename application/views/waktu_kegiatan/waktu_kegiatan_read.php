
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><?php echo anchor('dashboard','<i class="fa fa-dashboard"></i> Beranda</a>')?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	<?php if(isset($message)){   
		 echo '<div class="alert alert-warning">  
		   <a href="#" class="close" data-dismiss="alert">&times;</a>  
		   '.$message.'
		 </div> '; 
    }  ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header">
		 <h3 class="box-title">Detail Waktu_kegiatan</h3>
		<hr />
        <table class="table">
	    <tr><td>Id Tanggal</td><td><?php echo $id_tanggal; ?></td></tr>
	    <tr><td>Mulai</td><td><?php echo $mulai; ?></td></tr>
	    <tr><td>Selesai</td><td><?php echo $selesai; ?></td></tr>
	    <tr><td>Detail</td><td><?php echo $detail; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('waktu_kegiatan') ?>"  class="btn btn-flat btn-warning no-print">Kembali</a></td></tr>
	</table>
        </div>
	 </div>
               
    </section>
	<!-- /.content -->