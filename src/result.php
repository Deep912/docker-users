<?php 

include 'con.php';

// Retrieve data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Create HTML table with user and docker columns
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Data Table</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>
<h1>User Data Table</h1>
<body>
  

  <table>
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?> 
    
    <tr>
        
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['docker']; ?></td>
      </tr>
    
    
     

    <?php
}

?> 
</tbody>
</table>

</body>
</html>
<?php
echo "</table>";

mysqli_close($conn);

?>