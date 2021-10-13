<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "demo_db";
    $con = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_error()){
        echo "connection fail: ".mysqli_connect_error();
    }
    // else{
    //     echo "Success";
    // }
?>