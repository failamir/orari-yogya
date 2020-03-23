<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tanggal_kegiatan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Hari</th>
		<th>Tanggal</th>
		<th>Status</th>
		
            </tr><?php
            foreach ($tanggal_kegiatan_data as $tanggal_kegiatan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tanggal_kegiatan->hari ?></td>
		      <td><?php echo $tanggal_kegiatan->tanggal ?></td>
		      <td><?php echo $tanggal_kegiatan->status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>