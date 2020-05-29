<?php
	 
	$host='servicetimeutec.mysql.database.azure.com';
	$db_name='servicetime';
	$username='admintrador@servicetimeutec';
	$password='Utec2020!';
	
	
	$conn = mysqli_init();
   	mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($conn)) {
	die('Failed to connect to MySQL: '.mysqli_connect_error());
	}




?>