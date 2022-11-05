<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database_name = "member";

	$connect = mysqli_connect($server,$user,$password,$database_name);
	if(!$connect){
		die("Gagal koneksi: ". mysqli_connect_error());
	}
?>