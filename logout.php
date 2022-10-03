<?php
session_start();
//set the current time to the database 
$_SESSION["time"] = time();
// redirect to login
header("Location: login.php");
