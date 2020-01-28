<!DOCTYPE html>
<html>
<head>
	<title>Tes</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<a href="<?php echo base_url() ?>index.php/movie"><button type="button" class="btn btn-primary btn-sm">Cari Film Lagi</button></a>
		<table id="data-table" class="table table-striped table-bordered" style="width:100%">
		    <thead class="thead-dark">
		        <tr>
		            <th>No</th>
		            <th>Nama Film</th>
		            <th>Tahun</th>
		            <th>Rilis</th>
		            <th>Opsi</th>
		        </tr>
		    </thead>
		    <tbody>
		    <?php $no=1; foreach ($data_film as $row) {
		    ?>
		        <tr>
		            <td><?php echo $no++; ?></td>
		            <td><?php echo $row['Title'] ?></td>
		            <td><?php echo $row['Year'] ?></td>
		            <td><img src="<?php echo $row['Poster'] ?>" width="100"></td>
		            <td><a href="<?php echo base_url() ?>index.php/movie/detail/<?php echo $row['imdbID'] ?>"><button class="btn btn-sm btn-primary">Detail</button></a></td>
		        </tr>
		    <?php } ?>
		    </tbody>
		</table>
	</div>

</body>
</html>