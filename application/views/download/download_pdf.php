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
        <h2>Download List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Callsign</th>
		<th>Checkin</th>
		<th>Kategori</th>
		<th>Counter</th>
		<th>File</th>
		<th>Status</th>
		
            </tr><?php
            foreach ($download_data as $download)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $download->callsign ?></td>
		      <td><?php echo $download->checkin ?></td>
		      <td><?php echo $download->kategori ?></td>
		      <td><?php echo $download->counter ?></td>
		      <td><?php echo $download->file ?></td>
		      <td><?php echo $download->status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>