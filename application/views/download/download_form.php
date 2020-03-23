
	  <div class="card-header">
	  <h5 class="card-title"><?php echo $button ;?> Download</h5>
		
		<div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
			  </div>
			  <div class="card-body">
			  <!-- Content Header (Page header) -->
			  <section class="content-header">
			   
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
					// echo form_input($kategori);
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
			echo form_input($id); ?>
	<div class="card-footer">
                <div class="row">
	
	<?php    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('download','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
	</div>
                <!-- /.row -->
              </div>	
	</div>
	 </div>
               
    </section>
	<!-- /.content -->

    