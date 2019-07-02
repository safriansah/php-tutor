<?php 
include'assets/php/koneksi.php';
$user->cekLog();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mikamerah Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/vendor/jquery-slim.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="<?=$base_url?>index.php">Mikamerah</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Keranjang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pembayaran</a>
            </li>    
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="#"><?=$_SESSION['uname']?></a>
            </li>
            <li class="nav-item">
                <form action="aksi.php" method="post">
                    <input class="btn btn-warning btn-sm my-1" type="submit" name="logout" value="logout">
                </form>
            </li> 
        </ul>
    </div>
    </div>
</nav>

<div class="container py-3">
    <div class="row">
        <div class="col-md-2">
            <p>Pilih Kategori:</p>
            <div class="list-group list-group-flush">
            <?php
            foreach($kategori->getAllData() as $d){
            ?>
                <a href="<?=$base_url?>index.php?kategori=<?=$d['id']?>" class="list-group-item list-group-item-action"><?=$d['nama']?></a>
            <?php } ?>
            </div>  
        </div>
        <div class="col-md-10">
            <h2>Halaman Produk</h2>
            <p>Pilih produk yang anda inginkan</p>
            <div class="row">
                <?php
                if(isset($_GET['kategori'])) $data=$produk->getAllByKategori($_GET['kategori']);
                else $data=$produk->getAllData();
                foreach($data as $d){
                ?>
                <div class="col-md-4 pb-3">
                    <div class="card">
                        <div class="card-header"><?=$d['nama']?></div>
                        <div class="card-body">
                            <p class="card-title">Harga: Rp. <?=$d['harga']?></p>
                            <p class="card-title">Kategori: <?=$kategori->getNama($d['id_kategori'])?></p>
                            <p class="card-text"><?=substr($d['keterangan'], 0, 128)?>...</p>
                        </div>
                        <div class="card-footer text-right">
                            <form action="#" class="row" method="post">
                                <div  class="col-md-6 py-1">
                                    <input type="number" class="btn mw-100 text-center border-1" name="qty" id="qty" value="0">
                                </div>
                                <div  class="col-md-6 py-1">
                                    <input type="submit" class="btn btn-success mw-100" value="Beli">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>    
    </div>
</div>

<div class="text-center py-3 bg-secondary text-light">
    <p>&copy; 2019 <a class="text-light" href="https://safriansah.blogspot.com/">Mikamerah Blog</a></p>
</div>

</body>
</html>