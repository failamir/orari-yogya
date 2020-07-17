
       
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
		 <h3 class="box-title">Daftar Waktu_kegiatan</h3><hr />	
        
			 <?php echo anchor(site_url('waktu_kegiatan/create'),'<i class = "fa fa-plus"></i> Tambah', 'class="btn btn-flat btn-primary"'); ?>
            
            <div class="box-tools pull-right">
                <form action="<?php echo site_url('waktu_kegiatan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('waktu_kegiatan'); ?>" class="btn btn-flat btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-flat btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
		<div class="box-body">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Tanggal</th>
		<th>Mulai</th>
		<th>Selesai</th>
		<th>Detail</th>
		<th>Aksi</th>
            </tr><?php
            foreach ($waktu_kegiatan_data as $waktu_kegiatan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $waktu_kegiatan->id_tanggal ?></td>
			<td><?php echo $waktu_kegiatan->mulai ?></td>
			<td><?php echo $waktu_kegiatan->selesai ?></td>
			<td><?php echo $waktu_kegiatan->detail ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('waktu_kegiatan/read/'.$waktu_kegiatan->id),'<i class="fa fa-eye"></i>','class="btn btn-flat btn-info"'); 
				echo '  '; 
				echo anchor(site_url('waktu_kegiatan/update/'.$waktu_kegiatan->id),'<i class="fa fa-edit"></i>','class="btn btn-flat btn-warning"'); 
				echo '  '; 
				echo anchor(site_url('waktu_kegiatan/delete/'.$waktu_kegiatan->id),'<i class="fa fa-trash" aria-hidden="true"></i>','class="btn btn-danger" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-flat btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('waktu_kegiatan/excel'), '<i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-flat btn-success"'); ?>
		<?php echo anchor(site_url('waktu_kegiatan/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-flat btn-primary"'); ?>
		<?php echo anchor(site_url('waktu_kegiatan/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-flat btn-danger"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
		</div>
		</div>
		</section>
   <!-- /.content -->
  
    