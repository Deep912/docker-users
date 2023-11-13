<?php 

$hostname = "mysql";
$username = "root";
$password = "root";
$database = "phplogin";

$conn = new mysqli($hostname, $username, $password , $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>