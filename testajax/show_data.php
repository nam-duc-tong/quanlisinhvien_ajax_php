<?php
    if(isset($_POST["username"])){
        //kiem tra neu nguoi dung da an nut dang ki de gui thong tin hay chua
        $username = $_POST["username"];//lay thong tin username
        $password = $_POST["password"];//lay thong tin password
        $email = $_POST["email"];//lay thong tin email
        $sex = $_POST["sex"];//lay thong tin sex
        $age = $_POST["age"];//lay thong tin age
        $birthday = $_POST["birthday"];//lay thong tin birthday
        echo $username. " | ".$password. " | ". $email. " | ".$sex." | ".$age." | ".$birthday; // xuat du lieu lay duoc ra cho phia server
        //duoi day se la ngung do
    }
?>