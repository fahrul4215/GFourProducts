<?php
	$Host = "localhost";
	$Username = "root";
	$Password = "";
	$DB = "db_lo";

	$Koneksi = mysql_connect($Host, $Username, $Password);

	mysql_select_db($DB, $Koneksi);
?>