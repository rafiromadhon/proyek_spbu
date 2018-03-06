<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kontak - SPBU MURI Tegal</title>

    <link rel="icon" type="image/png" href="img/icon/icon.png">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_contact.css">
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
                    <li><a href="article.php">Artikel</a></li>
                    <li><a href="gallery.php">Galeri</a></li>
                    <li class="active"><a href="#">Kontak</a></li>
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
                    <hr>
                    <p class="sub-judul">Untuk menghubungi SPBU Muri Tegal. Isilah form dibawah ini</p>
                </div>
            </div>
            <div class="row">
                <form action="" method="post">
                    <div class="col-sm-6 text-left" id="kiri">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" name="message" rows="8" placeholder="Pesan Anda"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" class="btn" name="save" value="KIRIM PESAN">
                        </div>
                    </div>
                </form>

                <?php 

                include('connection.php');

                if(isset($_POST['save'])){

                    $nama = $_POST['name'];
                    $email = $_POST['email'];
                    $pesan = $_POST['message'];

                    $simpan = $_POST['save'];

                    if ($simpan) {
                        $sql = mysql_query("insert into contact (name, email, message) values ('$nama', '$email', '$pesan')");
                        if ($sql) {
                            ?>
                            <script type="text/javascript">
                                alert("Pesan Anda sudah direkam. Terima kasih yaa :)");
                            </script>
                            <?php  
                        }
                        
                    }
                }

                ?>

                <div class="col-sm-6" id="kanan">
                    <div class="form-group">
                        <h3>Info Kontak</h3>
                    </div>
                    <div class="atas">
                        <div class="row form-group">
                            <div class="col-sm-2 text-center">
                                <div class="box-icon-2">
                                    <i class="fa fa-home"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p>Jl. Raya Dampyak km. 3,5 Tegal <br> Jawa Tengah, Indonesia</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2 text-center">
                                <div class="box-icon-2">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p>(0283) 350106<br>+62856-4009-5835</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2 text-center">
                                <div class="box-icon-2">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p id="bawah">spbumuri.smu@gmail.com</p>
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
                    <p class="parag">&copy; 2018 Copyright SPBU Muri Tegal. All right reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>