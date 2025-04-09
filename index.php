<?php
//memasukkan file config.php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN SMKN 1 Nglegok</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,600,700,700i');
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400');

	body{
		font-family: 'Poppins', sans-serif;
		margin: 0px;
	}
	.slider{
		background: #67bef991;
	}
	section.slider{
		background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("perpus.jpg") fixed;
		background-position: center;
		background-size: 100%;
		height: 50vh;
	}
	.font-slider{
		margin-top: 10%;
		text-align: center;
	}
	.judulsejarah{

		color: #3498db;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.paragraph{
		text-align: justify;
		border-left: 7px solid #3498db;
		padding-left: 30px;
	}
	.paragraph2{
		margin-top: 30%;
		text-align: justify;
		border-right: 7px solid #3498db;
		padding-right: 30px;
	}
	.komentest{
	    padding: 10px 0px;
	    border-top: 1px solid #ccc;
	    border-bottom: 1px solid #ccc;
	    font-family: poppins;
	    font-size: 11pt;
	    text-align: justify;
	}
	.mark{
		background: linear-gradient(to bottom right, #eaeaeab0, whitesmoke);
	    text-align: center;
	    padding: 20px;
	    box-shadow: 0px 4px #ccc;
	    border-radius: 11px;
	    margin: 50px 0px 0px 0px;
	    margin-bottom: 15px;
	}
	.sejarah{
		padding-top: 6%;
	}

	.informasi{
		background: #f9f9f9;
		padding-bottom: 15px;
	}
	.visi{
		padding: 20px;
	    background: #dcdcd8;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}
	.misi{
		padding: 20px;
	    background: #fdf3e5;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}

	.kontak-informasi{
		padding: 20px;
	    background: #d6e4fc;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}
	.top{
		margin-top: 5px;
		padding: 10px;
		background: #eee1b9;
	}
	.link{
		background: #4ca2e1;
		text-decoration: none;
		color: #ffffff;
	}
	.link2{
		background: #DDB538;
		text-decoration: none;
		color: white;
	}
	.link3{
		background: #e3875f;
		text-decoration: none;
		color: white;
	}
	.link4{
		background: #91d97b;
		text-decoration: none;
		color: white;
	}
	.link5{
		background: #06D8D3;
		text-decoration: none;
		color: white;
	}
	.link6{
		background: #CE95BD;
		text-decoration: none;
		color: white;
	}

	.footer{
		background: #333;
	    color: white;
	    text-align: center;
	    padding: 20px 0px;
	    margin-top: 30px;
	}

	.footer h6{
		margin: 0px;
	}
</style>
<body>
<?php 
include 'navbar.php';
?>
<section class="top">
	<marquee>Selamat Datang Di Perpustakaan SMKN 1 Nglegok</marquee>
</section>

<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="font-slider" style="color: #fff;">Perpustakaan<br> <span style="color: #EC6B00; font-weight: bold;">SMK Negeri 1 Nglegok</span></h1>
			</div>
		</div>
	</div>
</section>

<section class="about" id="about">
	<div class="container sejarah">
		<div class="row">
			<div class="col">
				<h5 class="judulsejarah">Sejarah</h5>
				<p class="paragraph">Perpustakaan sekolah didirikan sebagai salah satu sarana penunjang kegiatan belajar mengajar. Sejak awal berdirinya, perpustakaan ini bertujuan untuk menyediakan berbagai sumber bacaan dan referensi guna meningkatkan minat baca serta wawasan siswa dan guru. Seiring waktu, koleksi dan fasilitas perpustakaan terus ditingkatkan untuk mendukung kebutuhan pembelajaran di sekolah.	</p>
			</div>
			<div class="col text-center">
				<p class="paragraph2">Saat ini, perpustakaan sekolah telah menjadi tempat yang nyaman untuk membaca, belajar, dan mencari informasi. Dengan adanya koleksi buku pelajaran, buku bacaan umum, serta beberapa media digital, perpustakaan diharapkan dapat terus menjadi pusat literasi yang mendukung perkembangan akademik siswa. Dukungan dari pihak sekolah dan antusiasme siswa diharapkan dapat menjaga keberlangsungan dan perkembangan perpustakaan ke depannya.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="mark">
					<h5 style="margin: 0px">PERPUSTAKAAN <b>SMKN 1 Nglegok</b></h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="informasi" id="informasi">
	<div class="container">
		<div class="row">
			<div class="col">
				<h5 style="font-weight: bold; margin: 30px 0px;">INFORMASI</h5>
			</div>
		</div>
		<div class="row wow bounceIn" duration="2s" delay="5s">
			<div class="col">
				<div class="visi">
					<h3>Visi</h3>
					<div>
						<p>Menjadi pusat informasi dan pembelajaran terdepan yang mendukung pencapaian akademik dan penelitian di Universitas Teknologi Mataram, serta berkontribusi pada pengembangan ilmu pengetahuan dan teknologi.</p>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="misi">
					<h3>Misi</h3>
					<div>
						<p>
							<ol>
								<li>Menyediakan koleksi literatur yang lengkap dan berkualitas sesuai dengan kebutuhan akademik dan penelitian di berbagai bidang ilmu.</li>
								<li>Mengembangkan layanan perpustakaan berbasis teknologi informasi untuk mempermudah akses dan pencarian informasi.</li>
								<li>Meningkatkan keterampilan literasi informasi bagi mahasiswa, dosen, dan staf melalui pelatihan dan workshop.</li>
								<li>Menyediakan lingkungan belajar yang nyaman dan kondusif bagi seluruh pengguna perpustakaan.</li>
							</ol>
						</p>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="kontak-informasi">
					<h3>Kontak Informasi</h3>
					<div>
						<h4>No Telepon : 0817492742</h4>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="mark">
					<h5 style="margin: 0px">PERPUSTAKAAN <b>SMKN 1 Nglegok</b></h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="informasi" id="informasi">
	<div class="container">
		<div class="row">
			<div class="col">
				<h5 style="font-weight: bold; margin: 30px 0px;">INFORMASI</h5>
			</div>
		</div>
		<div class="row wow bounceIn" duration="2s" delay="5s">
			<div class="col">
				<div class="visi">
					<h3>Media Sosial</h3>
					<div>
						<a class="link" href=" https://utmmataram.ac.id">Web SMKN 1 Nglegok</a>
						<a class="link2" href=" utm.official2019@gmail.com">E-Mail SMKN 1 Nglegok</a>
						<a class="link3" href=" https://www.instagram.com/official.utm?igsh=MTM5dm50cmE2amtvOQ==">IG SMKN 1 Nglegok</a>
						<a class="link4" href=" https://www.facebook.com/utm.official2019">FB SMKN 1 Nglegok</a>
						<a class="link6" href=" https://bnsp.go.id/detaillsp.php?id=714">Informasi Lebih Lanjut</a>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="misi">
					<h3>Alamat</h3>
					<div>
						<p>
							<ol>
								<b>Jl. Raya Penataran No.1, Nglegok 1, Nglegok, Kec. Nglegok, Kabupaten Blitar, Jawa Timur, 66181</b><br>
							</ol>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col">
				<h6>Copyright &copy 20204 By Perpustakaan SMKN 1 Nglegok</h6>
			</div>
		</div>
	</div>
</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>