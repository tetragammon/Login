<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<?php

session_start();

$server			= 'localhost';
$username		= 'root';
$password		= '';
$database		= 'rezultate_coaching';

$conn = new mysqli($server,$username,$password,$database);

if ($conn->connect_error) {

	die('Eroare la conectare:'.$conn->connect_error);
}

?>