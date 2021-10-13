<?php

function register(){
if(!empty($_POST)){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        require_once("connection.php");
        //thuc hien truy van du lieu _ insert  data vao database
        $query = "insert into student(FULL_NAME,USER_NAME,PASSWORD,EMAIL,PHONE_NUMBER) VALUES('".$fullname."','".$username."','".$password."','".$email."','".$phone_number."')";
        mysqli_query($connect,$query);
        require_once("sql_close.php");
       
        
        header('Location:baitap.php');
    }
}

?>