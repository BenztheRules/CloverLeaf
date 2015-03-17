
<?php
	session_start();
	$email = $_POST["email"];
	$password = $_POST["password"];
	$db = new PDO("mysql:dbname=florok85; host=localhost",
	"florok85","0531785");

	$adj = hash("sha256", $password);

	$query = "SELECT User_Type_Id, Id, First_Name FROM User WHERE
	Email='$email' AND Password='$adj'";


	$rows = $db -> query ($query);

	if ($rows ->rowCount()==0){
		print("Incorrect username or password.");
	}

	foreach ( $rows as $row ){
		$userId = $row["Id"];
		$firstName = $row["First_Name"];
		$_SESSION["userId"] = $userId;
		$_SESSION["firstName"] = $firstName;
		$userType = $row["User_Type_Id"];
		if($userType == 1){
			$_SESSION["isUser"] = true;
			header("Location:User.php");	
		}else if($userType == 2){
			$_SESSION["isEmployee"] = true;
			header("Location:Employee.php");
		}else{
			$_SESSION["isAdmin"] = true;
			header("Location:Admin.php");
		}
	}	
?>