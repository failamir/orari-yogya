
	 <!-- <script src="https://cdn.tiny.cloud/1/t4g9b5tsx6fq7gwinyh9j4hsgzdpn5stgvph899qokjbcu5t/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
	 <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
  <script>tinymce.init({selector:'textarea'});</script> 
	  <div class="card-header">
	  <h5 class="card-title"><?php echo $button ;?> Landing</h5>
		
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
	    <?php 
			echo form_input($id); ?>
	<div class="card-footer">
                <div class="row">
	
	<?php    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('landing','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
	</div>
                <!-- /.row -->
              </div>	
	</div>
	 </div>
               
    </section>
	<!-- /.content -->

    