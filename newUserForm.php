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

        <p>Please choose the type of account:</p>
        <input type="radio" name="usertype" value="User"><br>
        <label>User</label><br>
        <input type="radio" name="usertype" value="Admin"><br>
        <label>Administrator</label><br>
        
        <label>Phone number</label>
        <input type="text" name="phone"><br>
        <label>Email</label>
        <input type="text" name="email"><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>