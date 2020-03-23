

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
		 <h5 class="box-title">Detail Waktu_kegiatan</h5>
    </div>
    <div class="card-body">
        <table class="table no-border">
	    <tr><td>Id Tanggal</td><td><?php echo $id_tanggal; ?></td></tr>
	    <tr><td>Mulai</td><td><?php echo $mulai; ?></td></tr>
	    <tr><td>Selesai</td><td><?php echo $selesai; ?></td></tr>
	    <tr><td>Detail</td><td><?php echo $detail; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('waktu_kegiatan') ?>" class="btn btn-flat btn-warning no-print">Kembali</a></td></tr>
	</table>
        </div>
	 </div>
               
    </section>
	<!-- /.content -->
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>

