
<div class="card-header">
<h5 class="card-title"><?php //echo $button ;?> Download</h5>
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
    <!-- Content Header (Page header) -->
	<div class="card-body">
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
		 
        
			 <?php echo anchor(site_url('download/create'),'<i class = "fa fa-plus"></i> Tambah', 'class="btn btn-flat btn-primary"'); ?>
            
            <div class="box-tools float-right">
                <form action="<?php echo site_url('download/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('download'); ?>" class="btn btn-flat btn-default">Reset</a>
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
        
        <table class="table table-bordered" style="margin-bottom: 10px;margin-top:10px">
            <tr>
                <th>No</th>
		<th>Callsign</th>
		<th>Checkin</th>
		<th>Kategori</th>
		<th>Counter</th>
		<th>File</th>
		<th>Status</th>
		<th>Aksi</th>
            </tr><?php
            foreach ($download_data as $download)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $download->callsign ?></td>
			<td><?php echo $download->checkin ?></td>
			<td><?php echo $download->kategori ?></td>
			<td><?php echo $download->counter ?></td>
			<td><?php echo $download->file ?></td>
			<td><?php echo $download->status ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('download/read/'.$download->id),'<i class="fa fa-eye"></i>','class="btn btn-flat btn-info"'); 
				echo '  '; 
				echo anchor(site_url('download/update/'.$download->id),'<i class="fa fa-edit"></i>','class="btn btn-flat btn-warning"'); 
				echo '  '; 
				echo anchor(site_url('download/delete/'.$download->id),'<i class="fa fa-trash"></i>','class="btn btn-flat btn-danger"','onclick="javasciprt: return confirm(\'Anda Yakin ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="card-footer">
                <div class="row">
                <a href="#" class="btn btn-flat btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('download/excel'), '<i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-flat btn-success"'); ?>
		<?php echo anchor(site_url('download/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-flat btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
            <p>
                <?php echo $pagination ?>
            </p>
                </div>
        </div>
        </div>
		</div>
		</div>
		</section>
   <!-- /.content -->
  
    