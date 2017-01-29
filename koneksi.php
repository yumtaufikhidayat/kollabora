<?php
	$host="localhost";
	$user="root";
	$pass="root";
	$db="kollabora";
	
	$koneksi= mysql_connect($host,$user,$pass);
	mysql_select_db($db,$koneksi);
?>