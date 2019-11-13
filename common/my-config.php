<?php 
	$db_name = 'nqraa_task_db';
	$db_user = 'root';
	$db_pass = '';
	$db_host = '127.0.0.1';
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	$sql_char= 'SET CHARACTER SET utf8';
	mysqli_query($conn,$sql_char);
	if (mysqli_connect_errno())
	{
	    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
	}
?>