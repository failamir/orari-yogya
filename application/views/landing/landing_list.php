
       
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><?php echo anchor('dashboard','<i class="fa fa-dashboard"></i> Dashboard</a>')?></li>
      </ol>
    </section>
	
<!-- Main content -->
    <section class="content">
	<?php if(isset($message)){   
		 echo '<div class="alert alert-success">  
		   <a href="#" class="close" data-dismiss="alert">&times;</a>  
		   '.$message.'
		 </div> '; 
    }  ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header">
		 <h3 class="box-title">Daftar Landing</h3><hr />	
        
         <a href="<?= site_url()?>landing/update/1" class="btn btn-flat btn-warning"><i class="fa fa-edit"></i> Update</a>
            
            <div class="box-tools pull-right">
                <!-- <form action="<?php echo site_url('landing/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('landing'); ?>" class="btn btn-flat btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-flat btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
            </div>
        </div>
		<div class="box-body">
        <table class="table no-border">
			<tr>
				<td>Nama Perusahaan</td>
				<td><?php echo $nama_perusahaan; ?></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><?php echo $deskripsi; ?></td>
			</tr>
			<tr>
				<td>Tentang</td>
				<td><?php echo $tentang; ?></td>
			</tr>
			<tr>
				<td>Visi</td>
				<td><?php echo $visi; ?></td>
			</tr>
			<tr>
				<td>Misi</td>
				<td><?php echo $misi; ?></td>
			</tr>
			<tr>
				<td>Juknsi</td>
				<td><?php echo $juknsi; ?></td>
			</tr>
			<tr>
				<td>Izin</td>
				<td><?php echo $izin; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $alamat; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>
			<tr>
				<td>Telpon</td>
				<td><?php echo $telpon; ?></td>
			</tr>
			<tr>
				<td>Gambar bagian about</td>
				<td><img src="<?php echo base_url('/assets/file/') . $img_about; ?>" style="width: 200px; height: 200px"></td>
			</tr>
			<tr>
				<td>Link video profil</td>
				<td><?php echo $link_video; ?></td>
			</tr>
			<tr>
				<td></td>
				<!-- <td><a href="<?php echo site_url('landing') ?>" class="btn btn-flat btn-warning no-print">Kembali</a> -->
				</td>
			</tr>
		</table>
        <div class="row">
            <div class="col-md-6">
                <!-- <a href="#" class="btn btn-flat btn-primary">Total Record : <?php echo $total_rows ?></a> -->
		<?php echo anchor(site_url('landing/excel'), '<i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-flat btn-success"'); ?>
		<?php echo anchor(site_url('landing/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-flat btn-primary"'); ?>
        <?php echo anchor(site_url('landing/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-flat btn-danger"'); ?>
        
	    </div>
            <div class="col-md-6 text-right">
                <!-- <?php echo $pagination ?> -->
            </div>
        </div>
		</div>
		</div>
		</section>
   <!-- /.content -->
  
    