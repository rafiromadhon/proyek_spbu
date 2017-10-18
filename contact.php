<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artikel</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_contact.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
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

                <a href="index.php" class="navbar-brand page-scroll"><img id="logo-navbar" src="img/logoprima.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="article.php">Artikel</a></li>
                    <li><a href="gallery.php">Galeri</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Content Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Kontak Kami</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 text-left" id="kiri">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" rows="8" placeholder="Pesan Anda"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn" role="submit">KIRIM PESAN</button>
                    </div>
                </div>

                <div class="col-sm-6 text-left" id="kanan">
                    <div class="form-group">
                        <h3>Info Kontak</h3>
                    </div>
                    <div class="atas">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <div class="box-icon-2">
                                    <i class="fa fa-home"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p>Jl. DI. Pandjaitan No. 128 Tegal <br> Jawa Tengah, Indonesia</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <div class="box-icon-2">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p>(0271) 596677<br>+62857 4394 5760</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <div class="box-icon-2">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p id="bawah">spbumuri@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="sosmed">
                        <ul class="col-sm-12">
                            <li>
                                <a href="https://facebook.com">
                                    <div class="box-icon-3">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <div class="box-icon-3">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com">
                                    <div class="box-icon-3">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com">
                                    <div class="box-icon-3">
                                        <i class="fa fa-google-plus"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="parag">&copy; 2017 Copyright SPBU Muri Tegal. All right reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>