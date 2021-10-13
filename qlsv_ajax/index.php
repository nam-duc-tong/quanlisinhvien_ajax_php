<?php
    require_once('dbhelper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        thead tr td{
           font-weight: bold; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading" style="font-weight: bold; margin-bottom:10px;">
                Quản lý thông tin sinh viên
                <form method="get">
                    <input type="text" name="s" class="form-control" placeholder="Tim kiem theo ten" style="margin-top:15px; margin-bottom:15px;">
                </form>
            </div>

            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>STT</td>
                            <td>Họ và Tên</td>
                            <td>Giới tính</td>
                            <td>Tuổi</td>
                            <td>Email</td>
                            <td>Số điện thoại</td>
                            <td width="60px"></td>
                            <td width="60px"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- tim kiem theo ten -->
                        <?php
                            if(isset($_GET['s']) && ($_GET['s']!='')){
                                $sql = 'SELECT * FROM students where FULL_NAME like "%'.$_GET['s'].'%"';   
                            }
                            else{
                                $sql = 'SELECT * FROM students';   
                            }
                         
                           $studentList = executeResult($sql);
                           $index = 1;
                           foreach($studentList as $std){
                                echo '<tr>
                                        <td>'.($index++).'</td>
                                        <td>'.$std['FULL_NAME'].'</td>
                                        <td>'.$std['GENDER'].'</td>
                                        <td>'.$std['AGE'].'</td>
                                        <td>'.$std['EMAIL'].'</td>
                                        <td>'.$std['PHONE_NUMBER'].'</td>
                                        <td><button class= "btn btn-warning" onclick=\'window.open("input.php?id='.$std['ID'].'","_self")\'>Edit</button></td>
                                        <td><button class= "btn btn-danger" onclick="deleteStudent('.$std['ID'].')">Delete</button></td>
                                    </tr>';
                           } 
                        ?>
                        
                    </tbody>

                </table>
                <button class="btn btn-success" onclick="window.open('input.php','_self')">Add Student</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function deleteStudent(id){
            option = confirm('Ban co muon xoa sinh vien nay khong');
            if(!option){
                return;
            }
            console.log(id);
            // console.log(id);
            $.post('delete_student.php',{
                'id':id
            },function(data){
                alert(data);
                location.reload();
            })
        }
    </script>
</body>
</html>