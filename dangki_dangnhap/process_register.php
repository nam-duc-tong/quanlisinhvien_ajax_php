<?php
//lay du lieu tu form dang ki gui sang
$registered_name = $registered_pass = "";
if(isset($_GET['username'])&&isset($_GET['password'])){
    $registered_name = $_GET['username'];
    $registered_pass = $_GET['password'];  
}
//lay du lieu gui tu form login
$username = $password = "";
if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
//kiem tra du lieu dang ki va du lieu nhap form a
if($registered_name == $username && $registered_pass == $password)
{
    header('Location: welcome.php');
    // echo "Tong Duc Nam";

}
else{
    echo '<h1 style="color:red;text-align:center">Login fail!!!</h1>';
}
?>
