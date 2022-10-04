<?php
include_once './database.php';

session_start();
$_SESSION["time"] = time();
$sql = "INSERT INTO log(username, time) VALUES ('" . $_SESSION["user"] . "', '" . time() . "')";
if (db_conn()->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}





header("Location: login.php");
