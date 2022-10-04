<?php


function db_conn()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loginsample";
	// Database Connection Code
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
		echo "Database Connected successfully";
	}
	return $conn;
}
