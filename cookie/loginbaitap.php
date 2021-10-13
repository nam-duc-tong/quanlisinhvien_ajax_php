<?php
    function login(){
        if(!empty($_POST)){
            $cookieEmail = $_COOKIE["email"];
            $cookiePass = $_COOKIE["password"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            if($email == $cookieEmail &&$password == $cookiePass){
                header("Location: pass.php");
            }
            else{
                echo "ban da nhap sai thong tin";
            }
        }
    }
?>