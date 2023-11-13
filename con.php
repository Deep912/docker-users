<?php 

$hostname = "mysql";
$username = "root";
$password = "root";
$database = "phplogin";

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>