
    <!-- Main content -->
    <section class="content">
	<?php if(isset($message)){   
		 echo '<div class="alert alert-warning">  
		   <a href="#" class="close" data-dismiss="alert">&times;</a>  
		   '.$message.'
		 </div> '; 
    }  ?>
      <!-- Default card -->
      
      <div class="card-header">
		 <h5 class="card-title">Ubah Foto Profil</h5>
     </div>
		<!-- <hr />	  -->
    <div class="card-body">
    <div class="image float-right"><h5 class="card-title">Foto Profil Sebelumnya<hr></h5>
          <!-- <img src="<?php echo base_url('resources');?>/dist/img/usr2-160x160.jpg" class="img-circle elevation-2" alt="usr Image"> -->
          <img src="<?php if($usr->foto != NULL){
            echo base_url('assets/foto_profil/'.$usr->foto.'');
          }else{echo base_url('assets/foto_profil/default.png');} ?>" class="img-circle" style="width:250px;height:250px" alt="usr Image">
        </div>
		<!-- <?php echo form_open("auth/edit_foto_action","multipart");?> -->
    <form method="post" action="<?= site_url("auth/edit_foto_action") ?>" enctype="multipart/form-data">
	    <div class = "form-group">
            <input type="file" name="images">
		</div>

		<!-- <?php echo form_input($usr->id);?> -->
    <input type="hidden" name="id" value="<?= $usr->id ?>">
		<?php echo form_submit('submit', lang('change_password_submit_btn'),array('class'=>'btn btn-primary btn-flat'));?>
	<?php echo form_close();?>
		</div>
	  </div>
               <!-- <?php var_dump($usr) ?> -->
    </section>
	<!-- /.content -->