<?php
	$email = $_POST["email"];
	$first = $_POST["first"];
	$last = $_POST["last"];
	$password = $_POST["password"];
	$passwordDuplicate = $_POST["passwordDuplicate"];
	$db = new PDO("mysql:dbname=florok85; host=localhost",
	"florok85","0531785");
	
	if($password != $passwordDuplicate){
		print("PASSWORDS DO NOT MATCH");
	}

	$adj = hash("sha256", $password);
	$query = "INSERT INTO User (Email, First_Name, Last_Name, User_Type_Id, Password) 
		VALUES ('$email', '$first', '$last', 1, '$adj')";

	$result = $db -> query ($query);	
	header("Location:Index.php");
?>