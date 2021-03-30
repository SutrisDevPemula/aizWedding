<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">

    <!-- font -->
    <link rel="preconnect" href="<?= base_url('asset/font/montserrat/Montserrat-Bold.ttf') ?>">
    <link rel="preconnect" href="<?= base_url('asset/font/Recursive/Recursive_Casual-Regular.ttf') ?>">
    <link rel="preconnect" href="<?= base_url('asset/font/Recursive/Recursive_Casual-Bold.ttf') ?>">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="font-family: 'montserrat';">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= $active; ?>">
                        <a class="nav-link" href="<?= base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/PagesController/tentang">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <h4 class="text-center">
                    Azizah Wedding
                </h4>
                <form class="form-inline ml-auto">
                    <button class="btn btn-sm mr-2" style="background-color: #F14E95; color: white;" type="button">Login</button>
                    <button class="btn btn-sm" style="background-color: #4BD83F; color: white;" type="button">Daftar</button>
                </form>

            </div>
        </div>
    </nav>


    <div class="card border-0" style="color: white;">
        <img src="<?= base_url('asset/images/wedding_header_black.png') ?>" width="100%" height="100%" alt="...">
        <div class="card-img-overlay w-50" style="margin-top: 23%; font-family: 'recursive';">
            <div class="container">
                <h5 class="card-title" style="font-weight: bold;">Azizah Wedding Sumber Inspirasi Untuk Pernikahan Anda</h5>
                <p class="card-text">Baca wedding ideas, temukan direktori wedding vendor terlengkap, nikmati cerita real wedding kami,
                    lihat inspiration board serta temukan best deal paket di weddingku store & honeymoon sekarang juga!</p>
                <p class="card-text">
                <form>
                    <button class="btn btn-sm mr-2 mt-3" style="background-color: #F14E95; color: white; width: 25%;" type="button">Daftar Sekarang!</button>
                </form>
                </p>
            </div>
        </div>
    </div>

    <!-- Content -->

    <?= $this->renderSection('content'); ?>


    <!-- footer -->
    <!-- js script for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap/js/bootstarp.bundle.min.js') ?>"></script> -->
</body>

</html>