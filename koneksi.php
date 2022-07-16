<?php
	$db = mysqli_connect('localhost','root','','dbsimpeg');
	
	if(!$db){
		die("Database tidak terkoneksi: " . mysqli_connect_error());
	}
	
?>
