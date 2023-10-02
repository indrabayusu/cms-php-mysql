<?php
  include "./inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/icon.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/navbar/">
    <title>CMS Sederhana</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="header">
        <h3>CMS Sederhana - CMSku</h3>
    </div>

    <!-- Static navbar -->
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CMSku</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="./">Home</a></li>
                    <li><a href="./?hal=profil">Profil</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layanan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./?hal=layanan-web">Pembuatan Web</a></li>
                            <li><a href="./?hal=layanan-company-profile">Pembuatan Company Profile</a></li>
                            <li><a href="./?hal=layanan-training">Training</a></li>
                        </ul>
                    </li>
                    <li><a href="./?hal=berita">Berita</a></li>
                    <li><a href="./?hal=kontak">Kontak Kami</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./admin/">Administrator</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-8">
            <?php
            if (isset($_GET['hal'])) {
                if ($_GET['hal'] == 'profil') {
                    $sql = mysqli_query($mysqli, "SELECT * FROM halaman WHERE id='1'");
                    $hal = mysqli_fetch_array($sql);
                    if ($hal) {
                        ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $hal['judul']; ?></h3>
                            </div>
                            <div class="panel-body" style="text-align: justify;">
                                <?php echo $hal['isi']; ?>
                            </div>
                        </div>
                        <?php
                    }
                } elseif ($_GET['hal'] == 'layanan-web') {
                    $sql = mysqli_query($mysqli, "SELECT * FROM halaman WHERE id='2'");
                    $hal = mysqli_fetch_array($sql);
                    if ($hal) {
                        ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $hal['judul']; ?></h3>
                            </div>
                            <div class="panel-body" style="text-align: justify;">
                                <?php echo $hal['isi']; ?>
                            </div>
                        </div>
                        <?php
                    }
                } elseif ($_GET['hal'] == 'layanan-company-profile') {
                    $sql = mysqli_query($mysqli, "SELECT * FROM halaman WHERE id='3'");
                    $hal = mysqli_fetch_array($sql);
                    if ($hal) {
                        ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $hal['judul']; ?></h3>
                            </div>
                            <div class="panel-body" style="text-align: justify;">
                                <?php echo $hal['isi']; ?>
                            </div>
                        </div>
                        <?php
                    }
                } elseif ($_GET['hal'] == 'layanan-training') {
                    $sql = mysqli_query($mysqli, "SELECT * FROM halaman WHERE id='4'");
                    $hal = mysqli_fetch_array($sql);
                    if ($hal) {
                        ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $hal['judul']; ?></h3>
                            </div>
                            <div class="panel-body" style="text-align: justify;">
                                <?php echo $hal['isi']; ?>
                            </div>
                        </div>
                        <?php
                    }
                } elseif ($_GET['hal'] == 'kontak') {
                    $sql = mysqli_query($mysqli, "SELECT * FROM halaman WHERE id='5'");
                    $hal = mysqli_fetch_array($sql);
                    if ($hal) {
                        ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $hal['judul']; ?></h3>
                            </div>
                            <div class="panel-body" style="text-align: justify;">
                                <?php echo $hal['isi']; ?>
                            </div>
                        </div>
                        <?php
                    } 
                } elseif ($_GET['hal']=='berita') {
                  include "hal_berita.php";
                }
            } else {
                $sql = mysqli_query($mysqli, "SELECT * FROM halaman WHERE id='6'");
                $hal = mysqli_fetch_array($sql);
                if ($hal) {
                    ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $hal['judul']; ?></h3>
                        </div>
                        <div class="panel-body" style="text-align: justify;">
                            <?php echo $hal['isi']; ?>
                        </div>
                    </div>
                    <?php
                } else {
                    echo "Halaman tidak ditemukan";
                }
            }
            ?>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kategori Berita</h3>
                </div>
                <div class="panel-body" style="text-align: justify;">
                    <ul class="nav nav-pills nav-stacked">
                        <?php
                        $sqlKategori = mysqli_query($mysqli, "SELECT id, nm_kategori FROM kategori");
                        while ($k = mysqli_fetch_array($sqlKategori)) {
                            ?>
                            <li>
                                <a href="./?hal=berita&ktg=<?php echo $k['id']; ?>">
                                    <?php echo $k['nm_kategori']; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer" style="margin-bottom: 10px;">
        <center>Copyright &copy; 2022</center>
    </div>

</div> 

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>