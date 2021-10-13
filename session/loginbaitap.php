<?php

    function login(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        if(!empty($_POST)){
            $sessionEmail = $sessionPass = "";
            if(isset($_SESSION["email"])){
                $sessionEmail = $_SESSION["email"];
            }
            if(isset($_SESSION["password"])){
                $sessionPass = $_SESSION["password"];
            }
      
        require_once("connection.php");
        //thuc hien truy van du lieu _ insert  data vao database
        $query = "Select * from student where EMAIL = '".$email."' and  PASSWORD='".$password."'";
        $result = mysqli_query($connect, $query);
        $data = array();
        while($row = mysqli_fetch_array($result,1)){
            $data[] = $row;
        }
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        require_once("sql_close.php");

        if($data!=null &&count($data)>0){
            header("Location: pass.php");
        }  
        }
    }
?>