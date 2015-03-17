<?php

$id = $_POST["id"];
$userId = $_POST["userId"];
$db = new PDO("mysql:dbname=florok85; host=localhost",
"florok85","0531785");

$query = "UPDATE User (User_Type_Id) VALUES (2) WHERE Id = '$userId'";


$rows = $db -> query ($query);


?>