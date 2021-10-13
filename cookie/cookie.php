<?php
    require_once("register.php");
    // echo "<pre>";
    // var_dump($_COOKIE);
    // echo "</pre>";
    // register();
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
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="text">User Name:</label>
                <input type="text" class="form-control" name="username">
            </div>
            <br><br>
            <div class="form-group">
                <label for="text">Ho Ten:</label>
                <input type="text" class="form-control" name="fullname">
            </div>
            <br><br>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <br><br>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <br><br>
            <div class="form-group">
                <label for="num">Phone Number:</label>
                <input type="num" class="form-control" name="phone_number">
            </div>
            <br><br>
            <button type="submit" class="btn btn-default">Register</button>
        </form>
    </div>
</body>
</html>