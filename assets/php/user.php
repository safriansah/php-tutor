<?php
class User{
    var $koneksi;
    var $base_url;
    var $table='tb_user';
    var $col=array("username", "password", "email", "tgl_lahir", "gender", "alamat", "kota", "telp", "paypal_id");

    function __construct($koneksi, $base_url){
        $this->koneksi=$koneksi;
        $this->base_url=$base_url;
    }

    function getColVal(){
        $result="";
        foreach($this->col as $d){
            $result.="$d, ";
        }
        $result=substr($result , 0, -2);
        return $result;
    }
    
    function getRowVal($data){
        $result="";
        foreach($data as $d){
            $result.="'$d', ";
        }
        $result=substr($result , 0, -2);
        return $result;
    }

    function register(){
        if($_POST['pswd']<>$_POST['copswd']){
            echo("<script LANGUAGE='JavaScript'>
                window.alert('Konfirmasi password tidak sama');
                window.location.href='".$this->base_url."register.php';
            </script>");
            return;
        }
        $row=array($_POST['uname'], md5($_POST['pswd']), $_POST['email'], $_POST['tgll'], $_POST['jeka'], $_POST['alamat'], $_POST['kota'], $_POST['telp'], $_POST['paypal']);
        $kolom=$this->getColVal();
        $baris=$this->getRowVal($row);
        $query="insert into $this->table($kolom) values($baris)";
        $res=mysqli_query($this->koneksi, $query);
        if($res)
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Registrasi berhasil');
                window.location.href='".$this->base_url."register.php';
            </script>");
        else
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Registrasi gagal');
                window.location.href='".$this->base_url."register.php';
            </script>");
    }

    function login(){
        $row=array($_POST['uname'], md5($_POST['pswd']));
        $query="select * from $this->table where ".$this->col[0]."='$row[0]' and ".$this->col[1]."='$row[1]'";
        $data=mysqli_fetch_array(mysqli_query($this->koneksi, $query));
        if(!isset($data[$this->col[0]])){
            echo("<script LANGUAGE='JavaScript'>
                window.alert('Kombinasi username dan password salah');
                window.location.href='".$this->base_url."login.php';
            </script>");
            return;
        }
        $_SESSION['uname']=$data[$this->col[0]];
        $_SESSION['id']=$data['id'];
        $_SESSION['login']='user';
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Login berhasil');
                window.location.href='".$this->base_url."index.php';
            </script>");
        return;
    }

    function logout(){
        session_destroy();
        header("Location: ".$this->base_url."login.php");
    }

    function cekLog(){
        if(!isset($_SESSION['uname']) || $_SESSION['login']<>'user'){
            header("Location: ".$this->base_url."login.php");
        }
    }

    function getDataUser(){
        $id=$_SESSION['id'];
        $query="select * from $this->table where id='$id'";
		$data=mysqli_query($this->koneksi, $query);
        $result=mysqli_fetch_array($data);
        return $result;
    }

    function updateDataUser(){
        $id=$_SESSION['id'];
        $email=$_POST['email'];
        $tgl=$_POST['tgll'];
        $jeka=$_POST['jeka'];
        $alamat=$_POST['alamat'];
        $kota=$_POST['kota'];
        $telp=$_POST['telp'];
        $paypal=$_POST['paypal'];
        
        $query="update $this->table set email='$email', tgl_lahir='$tgl', gender='$jeka', alamat='$alamat', kota='$kota', telp='$telp', paypal_id='$paypal' where id='$id'";
        $res=mysqli_query($this->koneksi, $query);
        if($res)
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Update berhasil');
                window.location.href='".$this->base_url."profile.php';
            </script>");
        else
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Update gagal');
                window.location.href='".$this->base_url."profile.php';
            </script>");
    }

    function updatePassUser(){
        $pass=$_POST['pswd'];
        $conf=$_POST['copswd'];
        if($pass<>$conf){
            echo("<script LANGUAGE='JavaScript'>
                window.alert('Konfirmasi password tidak sama');
                window.location.href='".$this->base_url."profile.php';
            </script>");
            return;
        }

        $id=$_SESSION['id'];
        $query="update $this->table set password=md5('$pass') where id='$id'";
        $res=mysqli_query($this->koneksi, $query);
        if($res)
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Update berhasil');
                window.location.href='".$this->base_url."profile.php';
            </script>");
        else
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Update gagal');
                window.location.href='".$this->base_url."profile.php';
            </script>");
    }
}
?>