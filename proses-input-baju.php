<?php
$id_baju=$_POST['id_baju'];
$nama_baju=$_POST['nama_baju'];
$harga=$_POST['harga'];
$bahan=$_POST['bahan'];
$tanggal_masuk=$_POST['tanggal_masuk'];
$ukuran=$_POST['ukuran'];
$stok_baju=$_POST['stok_baju'];
$warna=$_POST['warna'];




include "koneksi.php";

$simpan=$koneksi->query("insert into baju(id_baju,nama_baju,harga,bahan,tanggal_masuk,ukuran,stok_baju,warna) 
	                     values ('$id_baju', '$nama_baju', '$harga', '$bahan', '$tanggal_masuk', '$ukuran', '$stok_baju', '$warna')");

if($simpan==true){

	header("location:tampil-baju2.php?pesan=inputBerhasil");
} else{
	echo "Error";
}

?>