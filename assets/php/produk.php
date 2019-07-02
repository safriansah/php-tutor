<?php
class Produk{
    var $koneksi;
    var $base_url;
    var $table='tb_produk';

    function __construct($koneksi, $base_url){
        $this->koneksi=$koneksi;
        $this->base_url=$base_url;
    }
    
    function getAllData(){
        $no = 0;
		$data = mysqli_query($this->koneksi,"select * from $this->table order by RAND()");
		while($d = mysqli_fetch_array($data)){
		    $result[$no]=$d;
		    $no++;
		}
        return $result;
    }

    function getAllByKategori($kategori){
        $no = 0;
		$data = mysqli_query($this->koneksi,"select * from $this->table where id_kategori='$kategori' order by id desc");
		while($d = mysqli_fetch_array($data)){
		    $result[$no]=$d;
		    $no++;
		}
        return $result;
    }
}
?>