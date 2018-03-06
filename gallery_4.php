<!DOCTYPE HTML>
<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Galeri - SPBU MURI Tegal</title>

    <link rel="icon" type="image/png" href="img/icon/icon.png">
    
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/style_gallery.css" rel="stylesheet"/>
    
    <!-- CSS Lightbox -->
    <link href="css/lightbox.css" rel="stylesheet"/>
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
                    <li><a href="article.php">Artikel</a></li>
                    <li class="active"><a href="#">Galeri</a></li>
                    <li><a href="contact.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Content Gallery -->
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="row mtb-60">
                <div class="col-md-12 text-center">
                    <h1>Galeri Kami</h1>
                    <hr>
                    <p class="sub-judul">SPBU Muri Tegal selalu mengabadikan setiap moment kebahagiaan</p>
                </div>
                <div class="row">
                    <div class="col-md-4" id="item">
                        <div class="well">
                            <a class="example-image-link" href="img/galleries/gambar_35.JPG" data-lightbox="example-set" data-title="Pertamax"><img class="thumbnail img-responsive" alt="gambar_35.JPG" src="img/galleries/gambar_35.JPG" /></a>
                        </div>
                    </div>
                    <div class="col-md-4" id="item">
                        <div class="well">
                            <a class="example-image-link" href="img/galleries/gambar_36.JPG" data-lightbox="example-set" data-title="ATM"><img class="thumbnail img-responsive" alt="gambar_36.JPG" src="img/galleries/gambar_36.JPG" /></a>
                        </div>
                    </div>
                    <div class="col-md-4" id="item">
                        <div class="well">
                            <a class="example-image-link" href="img/galleries/gambar_37.JPG" data-lightbox="example-set" data-title="ATM"><img class="thumbnail img-responsive" alt="gambar_37.JPG" src="img/galleries/gambar_37.JPG" /></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="item">
                        <div class="well">
                            <a class="example-image-link" href="img/galleries/gambar_38.jpeg" data-lightbox="example-set" data-title="Pasti Prima"><img class="thumbnail img-responsive" alt="gambar_38.jpeg" src="img/galleries/gambar_38_kecil.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-3" id="item">
                        <div class="well">
                            <a class="example-image-link" href="img/galleries/gambar_39.jpeg" data-lightbox="example-set" data-title="Fasilitas Air dan Angin"><img class="thumbnail img-responsive" alt="gambar_39.jpeg" src="img/galleries/gambar_39_kecil.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-3" id="item">
                        <div class="well">
                            <a class="example-image-link" href="img/galleries/gambar_40.jpeg" data-lightbox="example-set" data-title="Enduro Express"><img class="thumbnail img-responsive" alt="gambar_40.jpeg" src="img/galleries/gambar_40_kecil.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-3" id="item">
                        <div class="well">
                            <a class="example-image-link" href="img/galleries/gambar_41.jpeg" data-lightbox="example-set" data-title="Nitrogen"><img class="thumbnail img-responsive" alt="gambar_41.jpeg" src="img/galleries/gambar_41_kecil.jpg" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content Gallery -->

    <!-- Pagination -->
    <section class="page" id="page">
        <nav aria-label="Page-navigation">
            <div class="container text-center">
                <ul class="pagination pagination-lg">
                    <li>
                       <a href="gallery_3.php" aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                       </a> 
                   </li>
                   <li><a href="gallery.php">1</a></li>
                   <li><a href="gallery_2.php">2</a></li>
                   <li><a href="gallery_3.php">3</a></li>
                   <li class="active"><a href="#">4</a></li>
                   <li class="disabled">
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="parag">&copy; 2018 Copyright SPBU Muri Tegal. All right reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="page-scroll"></a>




<script type="text/javascript" src="js/jquery.js"></script>
<!-- jQuery Lightbox -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

