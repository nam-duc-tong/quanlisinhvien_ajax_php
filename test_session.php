<?php
    session_start();
    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] = 1;
    }
    else{
        $_SESSION['counter']++;
    }
    $msg = "Ban da truy cap trang nay ".$_SESSION['counter'];
    $msg .= " lan trong session nay.";
    echo ($msg);
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
    <p>
        De tiep tuc , moi ban click vao trang sau : <br/>
        <a href="test.php?<?php echo htmlspecialchars(SID);?>"></a>
    </p>
</body>
</html>