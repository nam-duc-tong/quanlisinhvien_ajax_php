<?php
session_start();
    require_once('loginbaitap.php');
    login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "POST"action="">
    <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <br><br>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-default" value="Register">Register</button>
    </form>
</body>
</html>