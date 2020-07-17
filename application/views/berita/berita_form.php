 
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
		 <h3 class="box-title"><?php echo $button ;?> Berita</h3>
		<hr />	 
		<?php echo form_open_multipart($action);?>
	    <div class="form-group">
				<?php 
					echo form_label('Judul');
					echo form_error('judul');
					echo form_input($judul);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Isi');
					echo form_error('isi');
					echo form_textarea($isi);
				?>
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Date');
					echo form_error('date');
					echo form_input($date);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Gambar');
					echo form_error('gambar');
					echo form_input($gambar);
				?>				
			</div>
	    <?php 
			echo form_input($id);
	    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('berita','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
		</div>
	 </div>
               
    </section>
	<!-- /.content -->

    