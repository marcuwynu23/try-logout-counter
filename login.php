<?php
session_start();
include_once './lib.php';
include_once "./database.php";
// To check if session is started.

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST["username"];

	if (isset($_POST["login"])) {
		$_SESSION["user"] = $username;
		echo $_SESSION["user"];

		//the $time variable value from the database stored in the database
		//use the checkDayLimit function to check if the function is true or false

		$result = db_conn()->query("SELECT * FROM log WHERE username = '" . $username . "'");
		$result	= $result->fetch_assoc();
		$time = $result["time"];
		if (checkDayLimit($time)) {
			echo "conditions if the 45 day is passed.";
		} else {
			db_conn()->query("UPDATE logs SET time = '" . time() . "' WHERE username = '" . $username . "'");
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

	<?php
	getDateByTime($_SESSION["time"]);
	echo "<br>";
	getMilliRaimaining($_SESSION["time"]);
	?>
</body>

</html>