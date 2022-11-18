<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from baju where id_baju='$id'");

if($hapus==true){

	header("location:tampil-baju2.php?pesan=hapusBerhasil");

} else{
	echo "Error";
}

?>