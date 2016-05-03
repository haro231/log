<?php
/**
 * Created by PhpStorm.
 * User: Haro231
 * Date: 03/05/2016
 * Time: 21:34
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>LOGIN FORM</h1>
<div class = "loginBox">
<form method = "post" action ="login.php">

    <h5>username: <input type = "text" name = "username" placeholder="username"></h5>
    <h5>Age: <input type = "password" name="password" placeholder="password"></h5>
    <input type = "submit" name = "submit" value=" Submit">

    <div class = "error"> <?php //echo $error?> <?php //echo $username; echo $password?></div>
</div>
</form>
</body>
</html>