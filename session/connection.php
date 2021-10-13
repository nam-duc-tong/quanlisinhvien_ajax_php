<?php
require_once("define.php");
        //tao ket noi database
        $connect = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
        
        //cho phep php luu unicode (utf_8) - database
        mysqli_set_charset($connect,"utf8");
        //kiem tra ket noi co thanh cong khong
        if($connect->connect_error){
            var_dump($connect->error);
            die();
        }
?>