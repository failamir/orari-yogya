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
        <h2>Waktu_kegiatan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Tanggal</th>
		<th>Mulai</th>
		<th>Selesai</th>
		<th>Detail</th>
		
            </tr><?php
            foreach ($waktu_kegiatan_data as $waktu_kegiatan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $waktu_kegiatan->id_tanggal ?></td>
		      <td><?php echo $waktu_kegiatan->mulai ?></td>
		      <td><?php echo $waktu_kegiatan->selesai ?></td>
		      <td><?php echo $waktu_kegiatan->detail ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>