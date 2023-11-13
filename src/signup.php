<?php 
include 'con.php';

$name = $_POST['username'];
$password = $_POST['password'];
$docker = $_POST['docker'];

$sql = "INSERT INTO users ( username, password, docker ) VALUES ('$name', '$password' , '$docker')";

if ($conn->query($sql) === TRUE) {
    header("Location: result.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>