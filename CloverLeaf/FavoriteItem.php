<?php

$id = $_POST["id"];
$userId = $_POST["userId"];
$db = new PDO("mysql:dbname=florok85; host=localhost",
"florok85","0531785");

$query = "INSERT INTO Favorite (UserId, ProductId) VALUES ('$userId', '$id')";


$rows = $db -> query ($query);


?>