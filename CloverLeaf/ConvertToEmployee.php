<?php

$id = $_POST["id"];
$db = new PDO("mysql:dbname=florok85; host=localhost",
"florok85","0531785");

$query = "UPDATE User SET User_Type_Id = 2 WHERE Id = '$id'";


$rows = $db -> query ($query);


?>