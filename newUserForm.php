
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="newUserHandle.php" method="post">
        <label>First name:</label>
        <input type="text" name="firstname"><br>
        <label>Last name:</label>
        <input type="text" name="lastname"><br>
        <label>Username:</label>
        <input type="text" name="username"><br>

        <label>Type of account:</label>
        <label><input type="radio" name="usertype" value="Admin">Administrator</label>
        <label><input type="radio" name="usertype" value="User">User</label><br>
        
        <label>Phone number</label>
        <input type="text" name="phone"><br>
        <label>Email</label>
        <input type="text" name="email"><br>
        <button type="submit">Register</button>
    </form>
    <form action="index.php" method="post">
        <button type="submit">Back</button>
    </form>

</body>
</html>