<?php
require_once('dbhelper.php');
$fullname= $gender= $age=$email=$phone = '';

    if(!empty($_POST)){
        $id = '';
       
        if(isset($_POST['fullname'])){
            $fullname = $_POST['fullname'];
        }
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        if(isset($_POST['age'])){
            $age = $_POST['age'];
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['phone'])){
            $phone = $_POST['phone'];
        }
        if(isset($_POST['ID'])){
            $id = $_POST['ID'];
        }
        
        //tranh loi sql injection remove cac ki tu dac biet
        $fullname = str_replace('\'', '\\\'', $fullname);
        $age = str_replace('\'', '\\\'', $age);
        $address = str_replace('\'', '\\\'', $address);
        $email = str_replace('\'', '\\\'', $email);
        $phone = str_replace('\'', '\\\'', $phone);
        $id = str_replace('\'', '\\\'', $id);
        if($id !=''){
            //update
            $sql = "update students set FULL_NAME = '$fullname',AGE = '$age',GENDER = '$gender',EMAIL='$email',PHONE_NUMBER='$phone' where ID = ".$id;
        }
        else{
            //insert
            $sql = "insert into students(FULL_NAME,GENDER,AGE,EMAIL,PHONE_NUMBER) value('$fullname','$gender','$age','$email','$phone')";
        }
        execute($sql);
        header('Location: index.php');
        die();
    }
    $id = '';
    if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        $sql = 'select * from students where ID = '.$id;
        $studentList = executeResult($sql);
        if($studentList != null && count($studentList) > 0){
            $std = $studentList[0];
            $fullname = $std['FULL_NAME'];
            $gender = $std['GENDER'];
            $age = $std['AGE'];
            $email = $std['EMAIL'];
            $phone = $std['PHONE_NUMBER'];
        }
        else{
            $id = '';
        }
    }   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Student</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="number" name="ID" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
					</div>
                    <div class="form-group">
					  <label for="gender">Gender:</label>
					  <input type="text" class="form-control" id="gender" name="gender" value="<?=$gender?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Age:</label>
					  <input type="number" class="form-control" id="age" name="age" value="<?=$age?>">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input type="email" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>
                    <div class="form-group">
					  <label for="phone">Phone_Number</label>
					  <input type="text" class="form-control" id="phone" name="phone" value="<?=$phone?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>