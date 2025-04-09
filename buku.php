<?php
// memasukkan file config.php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN UTM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
include 'navbar.php';
?>

<div class="container" style="margin-top:20px">
	<h2><center>Data Buku Perpustakaan</center></h2>
	<hr>
	<div class="card">
		<div class="container">
			<table class="table table-striped table-hover table-sm table-bordered">
				<thead class="thead-danger">
					<tr class="table-primary" style="text-align:center">
						<th>Gambar buku</th>
						<th>No.</th>
						<th>Judul Buku</th>
						<th>Penulis</th>
						<th>Edisi</th>
						<th>Impersum</th>
						<th>Lokasi</th>
						<th>ISBN</th>
						<th>Golongan</th>
						<th>Bahasa</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Query ke database SELECT tabel buku urut berdasarkan id yang paling besar
					$sql = mysqli_query($coneksi, "SELECT * FROM buku ORDER BY id_buku DESC") or die(mysqli_error($coneksi));
					if(mysqli_num_rows($sql) > 0){
						while($data = mysqli_fetch_assoc($sql)){
							echo '
							<tr style="text-align:center">
								<td><img src="img/'.$data['gambar_buku'].'" height="50px" width="50px"></td>
								<td>'.$data['id_buku'].'</td>
								<td>'.$data['judul_buku'].'</td>
								<td>'.$data['penulis'].'</td>
								<td>'.$data['edisi'].'</td>
								<td>'.$data['impersum'].'</td>
								<td>'.$data['lokasi'].'</td>
								<td>'.$data['isbn'].'</td>
								<td>'.$data['golongan'].'</td>
								<td>'.$data['bahasa'].'</td>
								<td> 
									 <a href="editbuku.php?id_buku='.$data['id_buku'].'" class="badge badge-warning">Edit</a>
									 <a href="deletebuku.php?id_buku='.$data['id_buku'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
								</td>
							</tr>
							';
						}
					}else{
						echo '
						<tr>
							<td colspan="11">Tidak ada data.</td>
						</tr>
						';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>	
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

	
