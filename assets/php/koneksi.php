<?php
$host="localhost";
$user="root";
$pass="";
$db="db_tutor";
$base_url="http://localhost/mikamerah/";

$koneksi = mysqli_connect($host, $user, $pass, $db);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
	return;
}

session_start();

include 'user.php';
$user=new User($koneksi, $base_url);

include 'produk.php';
$produk=new Produk($koneksi, $base_url);

include 'kategori.php';
$kategori=new Kategori($koneksi, $base_url);

include 'keranjang.php';
$keranjang=new Keranjang($koneksi, $base_url);
?>