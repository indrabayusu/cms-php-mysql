<?php 
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "php-cms";

$mysqli = new mysqli($host, $user, $pass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
