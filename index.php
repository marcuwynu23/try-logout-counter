<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<p>Home</p>
	time remaining:
	<?php
	session_start();
	include_once "./checkLogout.php";
	$time = $_SESSION["time"];
	echo getDayRaimaining($time);
	?>
	<a href="/logout.php">logout</a>
</body>

</html>