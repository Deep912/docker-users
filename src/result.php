<?php 

include 'con.php';

// Retrieve data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);

// Display user name and docker
while ($row = mysqli_fetch_assoc($result)) {
    echo "User: " . $row['username'] . " - likes docker" . $row['docker'] . "<br>";
}

mysqli_close($con);



?>