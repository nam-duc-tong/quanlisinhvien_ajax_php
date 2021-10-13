<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doi thong tin thanh vien</title>
    <style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #create_user form{
                width: 200px;
                margin: 40px auto;
            }
            #create_user form input{
                margin: 5px 0;
            }
        </style>    
</head>
<body>
    <?php
       if(isset($_GET['action'])&&$_GET['action'] == 'edit'){
        if (isset($_POST['user_id']) && !empty($_POST['user_id']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $result = mysqli_query($con, "UPDATE `user` SET `password` = MD5('" . $_POST['password'] . "'), `status` = " . $_POST['status'] . ", `last_updated`=" . time() . " WHERE `user`.`id` = " . $_POST['user_id'] . ";");
            if (!$result) {
                $error = "Không thể cập nhật tài khoản";
            }
            mysqli_close($con);
            if ($error !== false) {
                ?>
                <div id="error-notify" class="box-content">
                    <h1>Thông báo</h1>
                    <h4><?= $error ?></h4>
                    <a href="./index.php">Danh sách tài khoản</a>
                </div>
            <?php } else { ?>
                <div id="edit-notify" class="box-content">
                    <h1><?= ($error !== false) ? $error : "Sửa tài khoản thành công" ?></h1>
                    <a href="./index.php">Danh sách tài khoản</a>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div id="edit-notify" class="box-content">
                <h1>Vui lòng nhập đủ thông tin để sửa tài khoản</h1>
                <a href="./edit_user.php?id=<?= $_POST['user_id'] ?>">Quay lại sửa tài khoản</a>
            </div>
        <?php
        }
    } else {
        $result = mysqli_query($con,"SELECT * FROM user where `id` = ".$_GET['id']);
        $user = $result -> fetch_assoc();
        mysqli_close($con);
        if(!empty($user)) { ?>
            <div id="edit_user" class="box-content">
                <h1>Sua tai khoan "<?=$user['username']?>"</h1>
                <form action="./edit_user.php?action=edit" method="post" autocomplete="off">
                    <label>Password</label>
                    <input type="hidden" name="user_id" value="<?=$user['id']?>">
                    <input type="password" name="password" value="">
                    <select name="status">
                        <option <?php if (!empty($user['status'])) {?>selected<?php }?> value="1">Kich hoat</option>
                        <option <?php if (empty($user['status'])) {?>selected<?php }?> value="0">Block</option>
                    </select>
                    <br><br>
                    <input type="submit" value="edit">
                </form>
            </div>
        <?php }
       }
        ?>
</body>
</html>