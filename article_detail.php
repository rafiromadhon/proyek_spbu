<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Article</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/art_detail.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<!-- navbar Brad -->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
		<div class="container">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="index.php" class="navbar-brand"><img id="logo-navbar" src="img/logo-nav.png"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Beranda</a></li>
					<li><a href="about.php">Tentang</a></li>
					<li class="active"><a href="article.php">Artikel</a></li>
					<li><a href="gallery.php">Galeri</a></li>
					<li><a href="contact.php">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end navbar -->

	<section class="article" id="article">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="box-icon">
						<i class="fa fa-book text-center"></i>
					</div>
					<h1>Blog SPBU Muri Tegal</h1>
				</div>
			</div>
			<div class="row" id="article-content">
				<div class="col-sm-8">
					<?php 

					include "connection.php";
					$id = $_GET['p'];
					$hasil = mysql_query("select * from artikel where id_artikel='$id'");
					$data=mysql_fetch_array($hasil);
					$file = 'admin/pages/articles/'.$data['photo_artikel'].'';
					if ($file =="admin/pages/articles/"){
						echo
						'<h3>'.$data['judul_artikel'].'</h3>
						<p>Posted by '.$data['penulis_artikel'].' <br>
						Pada Tanggal '.$data['tgl_artikel'].'</p> 
						<p>'.$data['isi_artikel'].'</p>'; 
					}
					else{
						?>
						<div class="article-1" href="#">
							<img src="<?php echo 'admin/pages/articles/photo-artikel/'.$data['photo_artikel'].'' ?>">
							<h2 class="text-left"><?php echo $data['judul_artikel']; ?></h2>
							<h5>Dipublikasikan tanggal : <?php echo $data['tgl_artikel']; ?><span class="text-center"> Penulis : <?php echo $data['penulis_artikel']; ?></span>
							</h5>
							<p class="text-justify"><?php echo $data['isi_artikel']; ?> 
							</p>
						</div>
						<?php } ?>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
							<h3 class="text-left">Cari</h3>
							<div class="place">
								<input type="text" placeholder="Cari disini. . .">
								<a href="#"><i class="fa fa-search"></i></a>
							</div>
						</div>
						<div class="tag">
							<h3 class="text-left">Tags</h3>
							<a href="#"><h4 id="list1"><small>SPBU MURI Tegal</small></h4></a>
							<a href="#"><h4 id="list1"><small>SPBU MURI</small></h4></a>
							<a href="#"><h4 id="list1"><small>SPBU Tegal</small></h4></a>
							<a href="#"><h4 id="list1"><small>SPBU terbaik</small></h4></a>
							<a href="#"><h4 id="list1"><small>SPBU mewah</small></h4></a>
							<a href="#"><h4 id="list1"><small>Nasi Bogana</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kesenangan</small></h4></a>
							<a href="#"><h4 id="list1"><small>Pernikahan</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kolam Renang</small></h4></a>
							<a href="#"><h4 id="list1"><small>Oleh-oleh khas Tegal</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kafe</small></h4></a>
							<a href="#"><h4 id="list1"><small>Oleh-oleh</small></h4></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="separation">
				
			</div>
		</section>

		<!-- Footer Brad -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="parag">&copy; 2017 Copyright SPBU Muri Tegal. All right reserved</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- ScrollTop -->
		<a href="#" class="page-scroll"></a>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
	</html>