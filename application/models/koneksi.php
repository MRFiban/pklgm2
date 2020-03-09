<?php

//mysqli
$mysqli = new mysqli("localhost", "root", "user");
$result = $mysqli->query("SELECT * FROM user");
$row = $result->fetch_assoc();

//PDO
$pdo = new PDO('mysql:host=localhost;pklgm2=user', 'root', 'root');
$statement = $pdo->query("SELECT * FROM user");
$row = $statement->fetch(PDO::FETCH_ASSOC);

?>