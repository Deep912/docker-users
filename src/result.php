<?php 

include 'con.php';

// Retrieve data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Create HTML table with user and docker columns
echo "<table><tr><th>Username</th><th>Like Docker</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["username"] . "</td><td>" . $row["docker"] . "</td></tr>";
}
echo "</table>";

mysqli_close($conn);

?>