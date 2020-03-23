
	  <div class="card-header">
	  <h5 class="card-title"><?php echo $button ;?> Waktu_kegiatan</h5>
		
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
		<?php echo form_open($action);?>
	    <div class="form-group">
				<?php 
					echo form_label('Id Tanggal');
					echo form_error('id_tanggal');
					// echo form_input($id_tanggal);
					echo cmb_dinamis('id_tanggal', 'Tanggal_kegiatan', 'tanggal', 'id');
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Mulai');
					echo form_error('mulai');
					echo form_input($mulai);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Selesai');
					echo form_error('selesai');
					echo form_input($selesai);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Detail');
					echo form_error('detail');
					echo form_input($detail);
				?>				
			</div>
	    <?php 
			echo form_input($id); ?>
	<div class="card-footer">
                <div class="row">
	
	<?php    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('waktu_kegiatan','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
	</div>
                <!-- /.row -->
              </div>	
	</div>
	 </div>
               
    </section>
	<!-- /.content -->

    