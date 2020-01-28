<!DOCTYPE html>
<html>
<head>
	<title>Belajar REST CLIENT</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Belajar REST CLIENT</h2>
				<h3>Data Mahasiswa</h3>
				<a href="<?php echo base_url() ?>index.php/mahasiswa"><button type="button" class="btn btn-warning btn-sm">Kembali</button></a>
				<br><br>
					
				<form action="<?php echo base_url() ?>index.php/mahasiswa/simpan_mahasiswa" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama</label>
				    <input type="text" class="form-control" name="nama">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Jenis Kelamin</label>
				    <select class="form-control" name="jenis_kelamin">
				    	<option value="Laki - Laki">Laki - Laki</option>
				    	<option value="Perempuan">Perempuan</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">No Handphone</label>
				    <input type="text" class="form-control" name="no_hp">
				  </div>
				  <button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>