<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form action="signup.php" method="post">
        <h2>Signup</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label>Like Docker??</label>
        <input type="radio" id="yes" name="docker" value="yes" checked>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="docker" value="no">
        <label for="no">No</label>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
