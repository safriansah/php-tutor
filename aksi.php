<?php
//error_reporting(0);
include 'assets/php/koneksi.php';
if(isset($_POST['reg'])){
    $user->register();
}
else if(isset($_POST['login'])){
    $user->login();
}
else if(isset($_POST['logout'])){
    $user->logout();
}
else if(isset($_POST['addKeranjang'])){
    $keranjang->addKeranjang();
}
else if(isset($_POST['delKeranjang'])){
    $keranjang->delKeranjang();
}
else if(isset($_POST['updateUser'])){
    $user->updateDataUser();
}
else if(isset($_POST['updatePassUser'])){
    $user->updatePassUser();
}
else{
    echo'Error 404';
}
?> 