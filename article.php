<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Artikel - SPBU MURI Tegal</title>

	<link rel="icon" type="image/png" href="img/icon/icon.png">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_article.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php 

	include "connection.php";

	$has = mysql_query("select * from artikel order by tgl_artikel desc");
	$num = mysql_num_rows($has);

	if ($num<1) {
		echo "Tidak ada artikel yang ditemukan. . .";
	}
	?>
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
					<li class="active"><a href="#">Artikel</a></li>
					<li><a href="gallery.php">Galeri</a></li>
					<li><a href="contact.php">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end navbar -->

	<!-- Content Article -->
	<section class="article" id="article">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="box-icon">
						<i class="fa fa-book"></i>
					</div>
					<h1>Selamat Datang di Blog SPBU Muri Tegal</h1>
				</div>
			</div>
			<div class="row" id="article-content">
				<div class="col-sm-8">
					<?php 
					while($data = mysql_fetch_array($has)){
						$art = substr($data['isi_artikel'], 0, 100); 
						?>
						<div class="article-1" href="#">
							<a href="<?php echo 'article_detail.php?p='.$data['id_artikel'].''; ?>"><img src="<?php echo 'admin/pages/articles/photo-artikel/'.$data['photo_artikel'].'' ?>"></a>
							<h2 class="text-left" id="content"><a href="<?php echo 'article_detail.php?p='.$data['id_artikel'].''; ?>"><?php echo $data['judul_artikel']; ?></a></h2>
							<p class="text-justify" id="content"><?php echo $art; ?><a href="<?php echo 'article_detail.php?p='.$data['id_artikel'].''; ?>"> baca selengkapnya</a> 
							</p>
							<div class="bawah">
								<a id="list" href="#"><p><i class="fa fa-calendar"></i><small><?php echo $data['tgl_artikel']; ?></small></p></a>
								<a id="list" href="#"><p><i class="fa fa-user"></i><small><?php echo $data['penulis_artikel']; ?></small></p></a>
								<a id="list" href="#"><p><i class="fa fa-eye"></i><small>6</small></p></a>
								<a id="list" href="#"><p><i class="fa fa-comment"></i><small>7</small></p></a>
							</div>
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
							<a href="#"><h4 id="list1"><small>Kesenangan</small></h4></a>
							<a href="#"><h4 id="list1"><small>Pernikahan</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kolam Renang</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kolam</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kafe</small></h4></a>
							<a href="#"><h4 id="list1"><small>Oleh-oleh</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kesenangan</small></h4></a>
							<a href="#"><h4 id="list1"><small>Pernikahan</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kolam Renang</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kolam</small></h4></a>
							<a href="#"><h4 id="list1"><small>Kafe</small></h4></a>
							<a href="#"><h4 id="list1"><small>Oleh-oleh</small></h4></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="parag">&copy; 2018 Copyright SPBU Muri Tegal. All right reserved</p>
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