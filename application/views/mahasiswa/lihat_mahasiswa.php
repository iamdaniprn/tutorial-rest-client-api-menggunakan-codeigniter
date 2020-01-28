<!DOCTYPE html>
<html>
<head>
	<title>Belajar REST CLIENT</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Belajar REST CLIENT</h2>
		<h3>Data Mahasiswa</h3>
		<a href="<?php echo base_url() ?>index.php/mahasiswa"><button type="button" class="btn btn-warning btn-sm">Kembali</button></a>
		<br><br>
		<table id="data-table" class="table table-striped table-bordered" style="width:100%">
	        <tr>
	        	<td>Nama</td>
	        	<td>:</td>
	            <td><?php echo $data_mhs['nama'] ?></td>
	        </tr>
	        <tr>
	        	<td>Jenis Kelamin</td>
	        	<td>:</td>
	        	<td><?php echo $data_mhs['jenis_kelamin'] ?></td>
	        </tr>
	        <tr>
	        	<td>No Handphone</td>
	        	<td>:</td>
	        	<td><?php echo $data_mhs['no_hp'] ?></td>
	        </tr>
	</div>

</body>
</html>