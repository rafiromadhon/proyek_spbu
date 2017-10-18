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

				<a href="#myCarousel" class="navbar-brand page-scroll"><img id="logo-navbar" src="img/logoprima.png"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#myCarousel" class="page-scroll">Home</a></li>
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
			<div class="item active">
				<img class="first-slide" src="img/slider(1).jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<p></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide" src="img/slider(2).jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1 id="judul-1">SPBU Muri Tegal</h1>
						<br>
						<br>
						<br>
						<br>
						<br>
							<!-- <p><a class="btn btn-lg btn-primary" role="button" data-toggle="modal" data-target="#myModal">Masuk Peserta</a></p>
							<p><a class="btn btn-lg btn-primary" role="button" data-toggle="modal" data-target="#myModal1">Masuk Guru</a></p>  -->          
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide" src="img/slider(3).jpg" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1 id="judul-1">SPBU Muri Tegal</h1>
							<!--<p><a class="btn btn-lg btn-primary" role="button" href="show.php">Tampil Peserta</a></p>
							<p><a class="btn btn-lg btn-primary" role="button" href="showguru.php">Tampil Guru</a></p> -->
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
							dan murah serta terjangkau untuk rehat sejenak tanpa gangguan
						</p>
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
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Suspendisse a impperdiet nisl. Aliquam erat volutpat.
							Morbi nec odio vehicula neque faucibus condimentum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Suspendisse a impperdiet nisl. Aliquam erat volutpat.
							Morbi nec odio vehicula neque faucibus condimentum.
						</p>
						<p><a class="btn btn-lg" role="button" href="about.php">Baca Selengkapnya</a></p>
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
				<hr id="testi-hr">
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
					<div class="col-sm-6">
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
					<div class="col-sm-6 col-sm-push-6 text-right">
						<ul>
							<li><a href="#" id="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" id="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" id="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" id="google-plus"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<p>&copy; 2017 Copyright SPBU Muri Tegal. All right reserved</p>
					</div>
				</div>
			</div>
		</footer>



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