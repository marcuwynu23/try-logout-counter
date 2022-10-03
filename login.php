<?php
session_start();
include_once './checkLogout.php';

// To check if session is started.


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST["username"];

	if (isset($_POST["login"])) {
		$_SESSION["user"] = $username;
		echo $_SESSION["user"];


		//the $time variable value from the database stored in the database
		//use the checkDayLimit function to check if the function 
		$time = time(); //<- get the time saved in the database

		if (checkDayLimit($time)) {
			echo "set conditions if the 45 day is passed.";
		} else {
			
			header("Location: index.php");
		}
	}
} ?>


<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
</head>

<body>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<input type="text" name="username" id="username">
		<input type="password" name="password" id="password">
		<button type="submit" name="login">login</button>
	</form>
</body>

</html>