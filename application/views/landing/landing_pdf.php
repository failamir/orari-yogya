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
        <h2>Landing List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Perusahaan</th>
		<th>Deskripsi</th>
		<th>Tentang</th>
		<th>Visi</th>
		<th>Misi</th>
		<th>Juknsi</th>
		<th>Izin</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Telpon</th>
		
            </tr><?php
            foreach ($landing_data as $landing)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $landing->nama_perusahaan ?></td>
		      <td><?php echo $landing->deskripsi ?></td>
		      <td><?php echo $landing->tentang ?></td>
		      <td><?php echo $landing->visi ?></td>
		      <td><?php echo $landing->misi ?></td>
		      <td><?php echo $landing->juknsi ?></td>
		      <td><?php echo $landing->izin ?></td>
		      <td><?php echo $landing->alamat ?></td>
		      <td><?php echo $landing->email ?></td>
		      <td><?php echo $landing->telpon ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>