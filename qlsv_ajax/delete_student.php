<?php
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        require_once('dbhelper.php');
        $sql = 'delete from students where ID = '.$id;
        execute($sql);
    }
    echo 'Xoa sinh vien thanh cong';

?>