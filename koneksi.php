<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "akademikk";

$konek = mysqli_connect($server, $user, $pass, $db);

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Databases :'.mysqli_connect_error();
}
	else{
		echo 'Koneksi berhasil';
	}