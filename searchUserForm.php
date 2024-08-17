<?php
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="searchUserHandle.php" method="post">
        <label>User ID:</label>
        <input type="text" name="id"><br>
        <label>First name:</label>
        <input type="text" name="firstname"><br>
        <label>Last name:</label>
        <input type="text" name="lastname"><br>
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>User type:</label>
        <label><input type="radio" name="usertype" value="Admin">Administrator</label>
        <label><input type="radio" name="usertype" value="User">User</label><br>
        <label>Phone</label>
        <input type="text" name="phone"><br>
        <label>Email</label>
        <input type="text" name="email"><br>
        
        
        <button type="submit">Search</button>

    </form>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>