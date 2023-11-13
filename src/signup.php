<?php 
include 'con.php';

$name = $_POST['name'];
$password = $_POST['password'];
$docker = $_POST['docker'];

$sql = "INSERT INTO users ( username, password, docker ) VALUES ('$username', '$password' , '$docker)";

if ($conn->query($sql) === TRUE) {
    header("Location: result.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>