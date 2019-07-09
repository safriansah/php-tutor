<?php 
include'assets/php/koneksi.php';
$user->cekLog();
if(isset($_GET['kategori'])) $data=$produk->getAllByKategori($_GET['kategori']);
else $data=$produk->getAllData();
$jumlahKeranjang=$keranjang->getKeranjangCount();
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
    <link rel="stylesheet" href="assets/css/custom.css">
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
                <a class="nav-link" href="cart.php">Keranjang (<?=$jumlahKeranjang?>)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pembayaran</a>
            </li>    
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="profile.php"><?=$_SESSION['uname']?></a>
            </li>
            <li class="nav-item">
                <form action="aksi.php" method="post">
                    <input class="btn btn-warning btn-sm my-1" type="submit" name="logout" value="logout">
                </form>
            </li> 
        </ul>
    </div>
</nav>

<div class="p-3 full-height">
    <div class="row mw-100">
        <div class="col-md-2">
            <p class="bold">Pilih Kategori:</p>
            <div class="list-group list-group-flush border-bottom">
            <?php
            foreach($kategori->getAllData() as $d){
            ?>
                <a href="<?=$base_url?>index.php?kategori=<?=$d['id']?>" class="list-group-item list-group-item-action <?php if($_GET['kategori']==$d['id']) echo"active"?>"><?=$d['nama']?></a>
            <?php } ?>
            </div>
        </div>
        <div class="col-md-10">
            <h2>Halaman Produk <?php if(isset($_GET['kategori'])) echo $kategori->getNama($_GET['kategori']) ?></h2>
            <p>Pilih produk yang anda inginkan</p>
            <div class="row">
                <?php
                foreach($data as $d){
                ?>
                <div class="col-md-6 col-lg-4 pb-3">
                    <div class="card">
                        <div class="card-header"><?=$d['nama']?></div>
                        <div class="card-body">
                            <p class="card-title">Harga: <?=$produk->getRupiahFormat($d['harga'])?></p>
                            <p class="card-title">Kategori: <?=$kategori->getNama($d['id_kategori'])?></p>
                            <p class="card-text"><?=substr($d['keterangan'], 0, 128)?>...</p>
                        </div>
                        <div class="card-footer text-right">
                            <form action="aksi.php" class="text-right" method="post">
                                <input type="hidden" name="id" value="<?=$d['id']?>">
                                <label for="qty" class="mx-1">Qty:</label>
                                <input type="number" class="qty bg-primary text-white text-center mx-1" name="qty" id="qty" value="0">
                                <input type="submit" name="addKeranjang" class="btn btn-success mx-1" value="Beli">
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