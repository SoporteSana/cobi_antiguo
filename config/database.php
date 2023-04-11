
<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "bd_encierro";


$mysqli = new mysqli($server, $username, $password, $database);
$acentos = $mysqli->query("SET NAMES 'utf8'");

if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>
