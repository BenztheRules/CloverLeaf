
<?php
	session_start();
	$date = $_POST["date"];
	$userId = $_SESSION["userId"];

	$db = new PDO("mysql:dbname=florok85; host=localhost",
	"florok85","0531785");

	$query = "INSERT INTO RequestOff (UserId, Date) VALUES ('$userId', '$date')";


	$rows = $db -> query ($query);
	header("Location:Employee.php");
?>