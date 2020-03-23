

   <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
	<?php if(isset($message)){   
		 echo '<div class="alert alert-warning">  
		   <a href="#" class="close" data-dismiss="alert">&times;</a>  
		   '.$message.'
		 </div> '; 
    }  ?>
      <!-- Default box -->
      
        <div class="card-header">
		 <h5 class="box-title">Detail Tanggal_kegiatan</h5>
    </div>
    <div class="card-body">
        <table class="table no-border">
	    <tr><td>Hari</td><td><?php echo $hari; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tanggal_kegiatan') ?>" class="btn btn-flat btn-warning no-print">Kembali</a></td></tr>
	</table>
        </div>
	 </div>
               
    </section>
	<!-- /.content -->