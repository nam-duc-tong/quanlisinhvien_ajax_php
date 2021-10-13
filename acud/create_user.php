<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tao tai khoan moi</title>
    <style>
        .box-content{
            margin: 0 auto;
            width: 800px;
            border: 1px solid #ccc;
            text-align: center;
            padding:20px;
        }
        #create_user form
        {
            width: 200px;
            margin: 40px auto; 
        }
        #create_user form input
        {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php
        $error = false;
        if(isset($_GET['action'])&&$_GET['action'] == 'create'){
            // echo "<pre>";
            // var_dump($_POST);exit;
            // echo "</pre>";
            if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password'])){
                include './acud_test.php';
                //them ban ghi vao co so du lieu
                $result = mysqli_query($con, "INSERT INTO `user` (`id`, `username`, `password`, `status`, `created_time`, `last_updated`) VALUES (NULL, '" . $_POST['username'] . "', MD5('" . $_POST['password'] . "'), 1, " . time() . ", '" . time() . "');");
                if(!$result){
                    // echo "<pre>";
                    // var_dump(mysqli_error($con));
                    // exit;
                    // echo "</pre>";
                    if(strpos(mysqli_error($con),"Duplicate entry")!==false){
                        $error = "Tai khoan da ton tai. Ban vui long chon tai khoan khac";
                    }
                }
                mysqli_close($con);
                if($error!==false){
                    ?>
                    <div id="error-notify" class="box-content">
                        <h1>Thong bao</h1>
                        <h4><?=$error?></h4>
                        <a href="./create_user.php">Tao tai khoan khac</a>
                    </div>
                <?php } else { ?>
                <div id="success-notify" class="box-content">
                    <h1>chuc mung</h1>
                    <h4>Ban da tao thanh cong tai khoan <?=$_POST['username']?></h4>
                    <a href="./index.php">Danh sach tai khoan</a>
                </div>
                <?php } ?>
            <?php } ?>
        <?php } else { ?>
            
    <div id="create_user" class="box-content">
        <h1>Tao tai khoan</h1>
        <form action="./create_user.php?action=create" method="Post" autoComplete="off">
            <label type="text" name="username" value="">
                <input type="text" name="username" value="">
                <br>
            </label>
            <label>Password</label><br/>
            <input type="password" name="password" value="">
            <br><br>
            <input type="submit" value="Create">
        </form>
    </div>
    <?php } ?>
</body>
</html>