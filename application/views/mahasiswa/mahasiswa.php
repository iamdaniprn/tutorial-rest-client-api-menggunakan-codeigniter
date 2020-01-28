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
		<a href="<?php echo base_url() ?>index.php/mahasiswa/tambah_mahasiswa"><button type="button" class="btn btn-primary btn-sm">Tambah Mahasiswa</button></a>
		<br><br>
		<table id="data-table" class="table table-striped table-bordered" style="width:100%">
		    <thead class="thead-dark">
		        <tr>
		            <th>No</th>
		            <th>Nama</th>
		            <th>Jenis Kelamin</th>
		            <th>No Handphone</th>
		            <th>Opsi</th>
		        </tr>
		    </thead>
		    <tbody>
		    <?php $no=1; foreach ($data_mhs as $row) {
		    ?>
		        <tr>
		            <td><?php echo $no++; ?></td>
		            <td><?php echo $row['nama'] ?></td>
		            <td><?php echo $row['jenis_kelamin'] ?></td>
		            <td><?php echo $row['no_hp'] ?></td>
		            <td>
		            	<a href="<?php echo base_url() ?>index.php/mahasiswa/lihat_mahasiswa/<?php echo $row['id_mahasiswa'] ?>"><button type="button" class="btn btn-success btn-sm">Lihat</button></a>
		            	<a href="<?php echo base_url() ?>index.php/mahasiswa/edit_mahasiswa/<?php echo $row['id_mahasiswa'] ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
		            	<a href="<?php echo base_url() ?>index.php/mahasiswa/hapus_mahasiswa/<?php echo $row['id_mahasiswa'] ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
		            </td>
		        </tr>
		    <?php } ?>
		    </tbody>
		</table>
	</div>

</body>
</html>