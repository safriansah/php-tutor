<?php
class Keranjang{
    var $koneksi;
    var $base_url;
    var $table='tb_keranjang';

    function __construct($koneksi, $base_url){
        $this->koneksi=$koneksi;
        $this->base_url=$base_url;
    }
    
    function getAllData(){
        $no = 0;
        $id_user=$_SESSION['id'];
        $data = mysqli_query($this->koneksi,"select * from $this->table where id_user='$id_user' order by id asc");
		while($d = mysqli_fetch_array($data)){
		    $result[$no]=$d;
		    $no++;
        }
        if($no<1) return null;
        else return $result;
    }

    function getKeranjangCount(){
        $id_user=$_SESSION['id'];
        $data=mysqli_query($this->koneksi,"select * from $this->table where id_user='$id_user'");
        $res=mysqli_num_rows($data);
        return $res;
    }
    
    function addKeranjang(){
        $qty=$_POST['qty'];
        if($qty<1){
            echo("<script LANGUAGE='JavaScript'>
                window.alert('Qty tidak valid');
                window.location.href='".$this->base_url."index.php';
            </script>");
            return;
        }
        $id_user=$_SESSION['id'];
        $id_barang=$_POST['id'];
        $data=mysqli_query($this->koneksi,"select * from $this->table where id_user='$id_user' and id_barang='$id_barang'");
        $res=mysqli_num_rows($data);
        if($res<1) $query="insert into $this->table(id_user, id_barang, jumlah) values('$id_user', '$id_barang', '$qty')";
        else $query="update $this->table set jumlah=jumlah+$qty where id_user='$id_user' and id_barang='$id_barang'";
        $res=mysqli_query($this->koneksi, $query);
        if($res)
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Berhasil ditambahkan');
                window.location.href='".$this->base_url."index.php';
            </script>");
        else
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Gagal ditambahkan');
                window.location.href='".$this->base_url."index.php';
            </script>");
    }

    function delKeranjang(){
        $id=$_POST['id'];
        $query="delete from $this->table where id='$id'";
        $res=mysqli_query($this->koneksi, $query);
        if($res)
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Berhasil dihapus');
                window.location.href='".$this->base_url."cart.php';
            </script>");
        else
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Gagal dihapus');
                window.location.href='".$this->base_url."cart.php';
            </script>");
    }
}
?>