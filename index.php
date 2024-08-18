
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form class="form" action="login.php" method="post">
    <label>Login:</label>
    <div class="input-field"><input type="text" name="username" placeholder="Username"></div><br>
    <button class="btn"type="submit">Login</button><br>
    <a href="newUserForm.php">Register</a>
    </form>
    </div>
</body>
</html>
<?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
?>
