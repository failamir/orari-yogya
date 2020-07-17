 
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
		 <h3 class="box-title"><?php echo $button ;?> Download</h3>
		<hr />	 
		<?php echo form_open_multipart($action);?>
	    <div class="form-group">
				<?php 
					echo form_label('Callsign');
					echo form_error('callsign');
					echo form_input($callsign);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Checkin');
					echo form_error('checkin');
					echo form_input($checkin);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Kategori');
					echo form_error('kategori');
					echo cmb_dinamis('kategori', 'kategori', 'nama', 'id');
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Counter');
					echo form_error('counter');
					echo form_input($counter);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('File');
					echo form_error('file');
					echo form_input($file);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Status');
					echo form_error('status');
					echo form_dropdown('status', array(
						'active' => 'Aktif', 
						'inactive' => 'Tidak Aktif',
						
					), '', array('class' => 'form-control'));
				?>				
			</div>
	    <?php 
			echo form_input($id);
	    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('download','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
		</div>
	 </div>
               
    </section>
	<!-- /.content -->

    