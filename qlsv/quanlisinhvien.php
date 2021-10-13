<?php
require_once('database.php');
if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];
    $sql = 'delete from students where id = '.$delete_id;
    execute($sql);
}
$hoten = $tuoi = $diachi = '';
if(isset($_POST['fullname'])){
    $hoten = $_POST['fullname'];
}
if(isset($_POST['age'])){
    $tuoi = $_POST['age'];
}
if(isset($_POST['address'])){
    $diachi = $_POST['address'];
}
if($hoten != '' && $tuoi !='' && $diachi !=''){
    $sql = 'insert into students (fullname,age,address) values("'.$hoten.'","'.$tuoi.'","'.$diachi.'")';
    execute($sql); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Khoa hoc lap trinh PHP</title> 
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Management Student's DEtail Information
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th width="60px"></th>
                    </tr>
                    <?php
                          $sql = 'select * from students';
                          $result = executeResult($sql);
                          $no = 1;
                          foreach($result as $row){
                              echo '<tr>
                                        <td>'.($no++).'</td>
                                        <td>'.$row['fullname'].'</td>
                                        <td>'.$row['age'].'</td>
                                        <td>'.$row['address'].'</td>
                                        <td><a href="?delete_id='.$row['id'].'"<button class="btn btn-danger">Delete</button></td>
                                    </tr>';
                          }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Input
            </div>
            <div class="panel-body">
              <form method="post">
              <div class="form-group">
                    <label>Fullname</label>
                    <input type="text" name="fullname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <button class="btn btn-success">Add</button>
              </form>
            </div>
        </div>
    </div>
</body>
</html>