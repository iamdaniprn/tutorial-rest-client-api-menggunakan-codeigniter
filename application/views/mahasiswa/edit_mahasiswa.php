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
					
				<form action="<?php echo base_url() ?>index.php/mahasiswa/update_mahasiswa" method="post">
				  <?php $jenis_kelamin = $data_mhs['jenis_kelamin']; ?>

				  <input type="hidden" name="id_mahasiswa" value="<?php echo $data_mhs['id_mahasiswa'] ?>">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama</label>
				    <input type="text" class="form-control" name="nama" value="<?php echo $data_mhs['nama'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Jenis Kelamin</label>
				    <select class="form-control" name="jenis_kelamin">
				    	<option value="Laki - Laki" <?php if($jenis_kelamin == 'Laki-Laki'){ echo 'selected'; } ?> >Laki - Laki</option>
				    	<option value="Perempuan" <?php if($jenis_kelamin == 'Perempuan'){ echo 'selected'; } ?> >Perempuan</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">No Handphone</label>
				    <input type="text" class="form-control" name="no_hp" value="<?php echo $data_mhs['no_hp'] ?>">
				  </div>
				  <button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>