

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
		 <h5 class="box-title">Detail Download</h5>
    </div>
    <div class="card-body">
        <table class="table no-border">
	    <tr><td>Callsign</td><td><?php echo $callsign; ?></td></tr>
	    <tr><td>Checkin</td><td><?php echo $checkin; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $kategori; ?></td></tr>
	    <tr><td>Counter</td><td><?php echo $counter; ?></td></tr>
	    <tr><td>File</td><td><?php echo $file; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('download') ?>" class="btn btn-flat btn-warning no-print">Kembali</a></td></tr>
	</table>
        </div>
	 </div>
               
    </section>
	<!-- /.content -->