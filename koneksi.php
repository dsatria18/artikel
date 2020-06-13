<?php
	
	global $koneksi;

	$dbhost = "localhost:3306"; 
	$dbuser = "root";    
	$dbpass = "";
	$dbname = "article";

	$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	
	if(!$koneksi) {
	   die("Not Working " .mysqli_connect_error());
	}

?>