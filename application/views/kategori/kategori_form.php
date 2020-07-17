 
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
		 <h3 class="box-title"><?php echo $button ;?> Kategori</h3>
		<hr />	 
		<?php echo form_open($action);?>
	    <div class="form-group">
				<?php 
					echo form_label('Nama');
					echo form_error('nama');
					echo form_input($nama);
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
	        echo anchor('kategori','Batal',array('class'=>'btn btn-flat btn-warning')); 
						?>
	<?php echo form_close();?>
		</div>
	 </div>
               
    </section>
	<!-- /.content -->

    