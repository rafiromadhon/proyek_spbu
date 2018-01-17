 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Our Project</title>     

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href="css/carousel.css" rel="stylesheet">
	<link href='css/custom.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- navbar Brad -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="" class="navbar-brand"><img id="logo-navbar" src="img/logo-nav.png"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">Beranda</a></li>
					<li><a href="about.php">Tentang</a></li>
					<li><a href="article.php">Artikel</a></li>
					<li><a href="gallery.php">Galeri</a></li>
					<li><a href="contact.php">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end navbar -->

	<!-- slider -->
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active" id="slider-1">
				<img class="first-slide" src="img/slider1.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Selamat Datang di SPBU Muri Tegal</h1>
					</div>
				</div>
			</div>
			<div class="item" id="slider-2">
				<img class="second-slide" src="img/slider2.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Fasilitas Baik yang Akan Memanjakan Anda</h1>
					</div>
				</div>
			</div>
			<div class="item" id="slider-3">
				<img class="third-slide" src="img/slider3.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Pusat Oleh-oleh khas Tegal</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<img class="left-control" src="img/prev.png">
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<img class="right-control" src="img/next.png">
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div><!-- /.carousel -->


	<!-- akhir dari slider -->

	<!-- layanan -->
	<section class="about" id="about">
		<div class="container">

			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>Keunggulan</h1>
					<hr>
					<p class="sub-judul">Kami unggul karena kami menyediakan berbagai layanan sebagai berikut</p>
				</div>	
			</div> 

			<div class="row" id="about-content">
				<div class="col-sm-4 text-center">
					<div class="box-icon">
						<i class="fa fa-coffee" id="about-1"></i>
					</div>
					<h3 class="kiri">Kafe Nyaman</h3>
					<p class="kiri">Kafe yang nyaman dengan suasana yang tenteram akan menjadikan
						suasana makan dan minum menyenangkan
					</p>
				</div>
				<div class="col-sm-4 text-center">
					<div class="box-icon">
						<i class="fa fa-tint" id="about-2"></i>
					</div>
					<h3 class="tengah">Toilet Bersih</h3>
					<p class="tengah">Toilet dengan jumlah amat banyak yang bersih dan asri nan sejuk
						tanpa harus mengantre berkepanjangan 
					</p>
				</div>
				<div class="col-sm-4 text-center">
					<div class="box-icon">
						<i class="fa fa-bed" id="about-3"></i>
					</div>
					<h3 class="kanan">Rest Area</h3>
					<p class="kanan">Tersedia tempat istirahat berkualitas
						dalam jumlah yang banyak untuk rehat sejenak setelah melakukan perjalanan jauh
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-push-6">
					<div class="text-center">
						<img src="img/oleh-oleh.png" alt="oleh-oleh.png">
					</div>
				</div>
				<div class="col-sm-6 col-sm-pull-6" id="oleh-kiri">
					<div class="text-right">
						<p>SPBU Muri Tegal bukan hanya sekedar tempat pengisian bahan bakar
						namun juga tempat pusat oleh-oleh khas Kota Tegal</p>
						<p><a class="btn" role="button" href="#">Lihat Selengkapnya</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end layanan -->

	<!-- Tentang kami -->
	<section class="tentangkami" id="tentangkami">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" id="tentangkami-kiri">
					<div class="media">
						<div class="media-left media-middle">
							<img class="media-object" src="img/tentangkami(1).jpg" alt="...">
						</div>
					</div>
				</div>
				<div class="col-sm-6" id="tentangkami-kanan">
					<h2>Sejarah SPBU Muri</h2>
					<p class="text-justify">
						Berawal dari kurang nyamannya SPBU sebagai tempat transit yang melintas di jalur pantura, kami melihat sebagai peluang dengan pengembangan fasilitas yang lengkap untuk memberikan kenyamanan kepada konsumen yang akan mengisi BBM sekaligus melepas lelah. Bernama SPBU MURI SINTHA IRAWATY 44-521-08 yang beralamat Di Jalan Raya DAMPYAK  KM. 3,5 TEGAL.  SPBU yang dikenal dengan nama MURI awalnya pada tahun  2003 hanya dengan 25 toilet, setahun kemudian tepatnya pada hari sabtu 30 Oktober 2004, rekornya pecah menjadi 67 toilet. Selama 4 (empat) tahun, kini dipecahkan kembali oleh SPBU Muri  menjadi 107 toilet bersih ditanah air. Tentu saja, . . .

					</p>
					<p><a class="btn" role="button" href="about.php">Baca Selengkapnya</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- end Tentang kami -->

	<!-- Maps -->
	<section class="maps" id="maps">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>Lokasi Kami</h1>
					<hr>
					<p class="sub-judul">Berikut lokasi SPBU Muri Tegal di Google Maps</p>
				</div>
			</div>
		</div>
		<div id="map"></div>
	</section>
	<!-- end Maps -->

	<!-- Testimonial -->
	<section class="testi" id="testi">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>Testimonial</h1>
					<hr>
					<p class="sub-judul" id="p-atas">Testimoni mereka yang berkunjung ke SPBU Muri Tegal</p>
				</div>
			</div>

			<div class="row" id="testi-atas">
				<div class="col-sm-6" id="testi-content">
					<div class="col-sm-3 text-center">
						<img src="img/ganteng1.jpg" alt="" class="img-circle">
					</div>
					<div class="col-sm-9 text-left">
						<p><i class="fa fa-quote-left" id="quote"></i> Excellent. Kata yang tepat untuk diberikan kepada SPBU ini. Kalau lewat pantura, jangan cuma lewat. Mampir kesini dulu. Nyesel kalau nggak. :D <i class="fa fa-quote-right" id="quote"></i>
						</p>
						<h4>@rafiromadhon_</h4>
					</div>
				</div>
				<div class="col-sm-6" id="testi-content">
					<div class="col-sm-3 text-center">
						<img src="img/ganteng1.jpg" alt="" class="img-circle">
					</div>
					<div class="col-sm-9 text-left">
						<p><i class="fa fa-quote-left" id="quote"></i> Pendapat saya adalah : Lorem ipsum dolor sit amet impperdiet, consectetur adipiscing elit. 
							Suspendisse nisl. Aliquam erat volutpat. <i class="fa fa-quote-right" id="quote"></i>
						</p>
						<h4>@rafiromadhon_</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6" id="testi-content">
					<div class="col-sm-3 text-center">
						<img src="img/ganteng1.jpg" alt="" class="img-circle">
					</div>
					<div class="col-sm-9 text-left">
						<p><i class="fa fa-quote-left" id="quote"></i> Pendapat saya adalah : Lorem ipsum dolor sit amet impperdiet, consectetur adipiscing elit. 
							Suspendisse nisl. Aliquam erat volutpat. <i class="fa fa-quote-right" id="quote"></i>
						</p>
						<h4>@rafiromadhon_</h4>
					</div>
				</div>
				<div class="col-sm-6" id="testi-content">
					<div class="col-sm-3 text-center">
						<img src="img/ganteng1.jpg" alt="" class="img-circle">
					</div>
					<div class="col-sm-9 text-left">
						<p><i class="fa fa-quote-left" id="quote"></i> Pendapat saya adalah : Lorem ipsum dolor sit amet impperdiet, consectetur adipiscing elit. 
							Suspendisse nisl. Aliquam erat volutpat. <i class="fa fa-quote-right" id="quote"></i>
						</p>
						<h4>@rafiromadhon_</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end Testimonial -->

	<!-- Long Footer -->
	<section class="footer-up" id="footer-up">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="img/logoprima.png" alt="">
					<!--<h3>SPBU Muri</h3>-->
					<div class="row">
						<div class="col-sm-1">
							<i class="fa fa-home"></i>
						</div>
						<div class="col-sm-5">
							<p class="ket">Jl. DI. Pandjaitan No. 128 Tegal Jawa Tengah, Indonesia</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1">
							<i class="fa fa-phone"></i>
						</div>
						<div class="col-sm-5">
							<p class="ket">(0271) 596677 <br> +62857 4394 5760</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6" id="fup-kanan">
					<div class="col-sm-4">
						<div class="row">
							<h4>Fasilitas</h4>
						</div>
						<div class="row">
							<p><a href="">Kafe</a></p>
							<p><a href="">Kolam Renang</a></p>
							<p><a href="">Mushola</a></p>
							<p><a href="">Rest Area</a></p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<h4>Menu</h4>
						</div>
						<div class="row">
							<p><a href="">Tentang Kami</a></p>
							<p><a href="">Layanan</a></p>
							<p><a href="">Galeri</a></p>
							<p><a href="">Artikel</a></p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<h4>Perusahaan</h4>
						</div>
						<div class="row">
							<p><a href="">Kontak Kami</a></p>
							<p><a href="">Lokasi</a></p>
							<p><a href="">Syarat</a></p>
							<p><a href="">Kebijakan Privasi</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end Long Footer -->

	<!-- Footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>&copy; 2017 Copyright SPBU Muri Tegal. All right reserved</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<a href="#" class="page-scroll"></a>



	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!--<script src="js/bootstrap.js"></script>-->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<script src="js/custom.js"></script>
</body>
</html>