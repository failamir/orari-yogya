
	  <div class="card-header">
	  <h5 class="card-title"><?php echo $button ;?> Toko</h5>
		
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
					echo form_label('Kodetoko');
					echo form_error('kodetoko');
					echo form_input($kodetoko);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Namatoko');
					echo form_error('namatoko');
					echo form_input($namatoko);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Nama');
					echo form_error('nama');
					echo form_input($nama);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Nik');
					echo form_error('nik');
					echo form_input($nik);
				?>				
			</div>
	    <div class="form-group">
				<?php 
					echo form_label('Jabatan');
					echo form_error('jabatan');
					echo form_input($jabatan);
				?>				
			</div>
	    <?php 
			echo form_input($id); ?>
	<div class="card-footer">
                <div class="row">
	
	<?php    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('toko','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
	</div>
                <!-- /.row -->
              </div>	
	</div>
	 </div>
               
    </section>
	<!-- /.content -->

    