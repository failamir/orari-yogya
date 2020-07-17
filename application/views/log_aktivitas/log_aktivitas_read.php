
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
		 <h3 class="box-title">Detail Log_aktivitas</h3>
		<hr />
        <table class="table">
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Aktivitas</td><td><?php echo $aktivitas; ?></td></tr>
	    <tr><td>Time</td><td><?php echo $time; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('log_aktivitas') ?>"  class="btn btn-flat btn-warning no-print">Kembali</a></td></tr>
	</table>
        </div>
	 </div>
               
    </section>
	<!-- /.content -->