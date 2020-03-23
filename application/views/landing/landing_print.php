

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
		 <h5 class="box-title">Detail Landing</h5>
    </div>
    <div class="card-body">
        <table class="table no-border">
	    <tr><td>Nama Perusahaan</td><td><?php echo $nama_perusahaan; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Tentang</td><td><?php echo $tentang; ?></td></tr>
	    <tr><td>Visi</td><td><?php echo $visi; ?></td></tr>
	    <tr><td>Misi</td><td><?php echo $misi; ?></td></tr>
	    <tr><td>Juknsi</td><td><?php echo $juknsi; ?></td></tr>
	    <tr><td>Izin</td><td><?php echo $izin; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Telpon</td><td><?php echo $telpon; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('landing') ?>" class="btn btn-flat btn-warning no-print">Kembali</a></td></tr>
	</table>
        </div>
	 </div>
               
    </section>
	<!-- /.content -->
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>

