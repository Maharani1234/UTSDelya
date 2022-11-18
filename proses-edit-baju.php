<?php

include "koneksi.php";


$id_baju=$_POST['id_baju'];
$nama_baju=$_POST['nama_baju'];
$harga=$_POST['harga'];
$bahan=$_POST['bahan'];
$tanggal_masuk=$_POST['tanggal_masuk'];
$ukuran=$_POST['ukuran'];
$stok_baju=$_POST['stok_baju'];
$warna=$_POST['warna'];


$ubah=$koneksi->query("update baju set id_baju='$id_baju', nama_baju='$nama_baju', harga='$harga', bahan='$bahan', tanggal_masuk='$tanggal_masuk', ukuran='$ukuran', stok_baju='$stok_baju', warna='$warna' where id_baju='$id'");

if($ubah==true){

	header("location:tampil-baju2.php?pesan=editBerhasil");
} else{

	echo "error";
}

?>