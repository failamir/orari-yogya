

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
		 <h5 class="box-title">Detail Berita</h5>
    </div>
    <div class="card-body">
        <table class="table no-border">
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Isi</td><td><?php echo $isi; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Gambar</td><td><?php echo $gambar; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('berita') ?>" class="btn btn-flat btn-warning no-print">Kembali</a></td></tr>
	</table>
        </div>
	 </div>
               
    </section>
	<!-- /.content -->
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>

