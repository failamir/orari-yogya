 
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
		 <h3 class="box-title"><?php echo $button ;?> Waktu_kegiatan</h3>
		<hr />	 
		<?php echo form_open($action);?>
	    <div class="form-group">
				<?php 
					echo form_label('Id Tanggal');
					echo form_error('id_tanggal');
					echo cmb_dinamis('id_tanggal', 'tanggal_kegiatan', 'tanggal', 'id');
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
			echo form_input($id);
	    	echo form_submit('submit', $button , array('class'=>'btn btn-flat btn-primary'));
	        echo anchor('waktu_kegiatan','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
		</div>
	 </div>
               
    </section>
	<!-- /.content -->

    