<?php
function register(){
if(!empty($_POST)){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        setcookie("fullname","",0,"/");
        setcookie("username","",0,"/");
        setcookie("password","",0,"/");
        setcookie("email","",0,"/");
        setcookie("phone_number","",0,"/");

        header("Location:pass.php");
    }
}

?>