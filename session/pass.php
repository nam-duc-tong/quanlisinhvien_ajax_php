<?php
// session_start();
//     require_once('logout.php');

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
    <center><h1>Welcome to Viet Nam</h1></center>
    <div class="container-fluid">
        <table class="table table-bordered table-hover">
            <tr>
                <th>No</th>
                <th>Full name</th>
                <th>User name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone number</th>
            </tr>
            <tbody>
            <?php
                require_once("connection.php");    
                 //thuc hien truy van du lieu _ insert  data vao database
                    $query = "Select * from student";
                    $result = mysqli_query($connect, $query);
                    $data = array();
                    while($row = mysqli_fetch_array($result,1)){
                        $data[] = $row;
                    }
                require_once("sql_close.php");
                //hien thi thong tin sinh vien ra man hinh
                for($i=0;$i<count($data);$i++){
                    echo '<tr>
                            <td>'.($i+1).'</td>
                            <td>'.$data[$i]['FULL_NAME'].'</td>
                            <td>'.$data[$i]['USER_NAME'].'</td>
                            <td>'.$data[$i]['PASSWORD'].'</td>
                            <td>'.$data[$i]['EMAIL'].'</td>
                            <td>'.$data[$i]['PHONE_NUMBER'].'</td>
                        </tr>';
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>