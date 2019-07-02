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
else{
    echo'Error 404';
}
?> 