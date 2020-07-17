 
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
		 <h3 class="box-title"><?php echo $button ;?> Landing</h3>
		<hr />	 
		<?php echo form_open_multipart($action);?>
	    <div class="form-group">
				<?php 
					echo form_label('Nama Perusahaan');
					echo form_error('nama_perusahaan');
					echo form_input($nama_perusahaan);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Deskripsi');
					echo form_error('deskripsi');
					echo form_textarea($deskripsi);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Tentang');
					echo form_error('tentang');
					echo form_textarea($tentang);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Visi');
					echo form_error('visi');
					echo form_textarea($visi);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Misi');
					echo form_error('misi');
					echo form_textarea($misi);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Juknsi');
					echo form_error('juknsi');
					echo form_input($juknsi);
				?>			
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Izin');
					echo form_error('izin');
					echo form_input($izin);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Alamat');
					echo form_error('alamat');
					echo form_textarea($alamat);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Email');
					echo form_error('email');
					echo form_input($email);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Telpon');
					echo form_error('telpon');
					echo form_input($telpon);
				?>				
			</div>
			<div class="form-group">
				<?php 
					echo form_label('Gambar bagian About');
					echo form_error('img_about');
					echo form_input($img_about);
				?>				
			</div>
			<div class="form-group">
				<?php 
					echo form_label('Link video profil');
					echo form_error('link_video');
					echo form_input($link_video);
				?>				
			</div>
	    <?php 
			echo form_input($id);
	    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('landing','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
		</div>
	 </div>
               
    </section>
	<!-- /.content -->

    