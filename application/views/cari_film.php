<!DOCTYPE html>
<html>
<head>
	<title>Tes</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h3>Cari Film</h3>
	<form action="<?php echo base_url() ?>index.php/movie/cari_film" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Ketik Nama Film</label>
		    <input type="text" class="form-control" name="film">
		  </div>
		  <button type="submit" class="btn btn-primary">Cari Film</button>
	</form>
</div>
</body>
</html>