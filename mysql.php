<?php
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD);
    if(!$conn){
        die('khong the ket noi: '.mysqli_error());
    }
    // echo 'ket noi thanh cong';
    $sql = 'CREATE TABLE employee( '.
    'id INT NOT NULL AUTO_iNCREMENT, '.
    'name varchar(255) not null, '.
    'address varchar(255) not null, '.
    'salary int not null, '.
    'primary key (id))';
    mysqli_select_db('banhang');
    $retval = mysql_query($sql,$conn);
    if(!$retval){
        die('Khong the tao bang: '.mysql_error());
    }
    echo "Tao bang employee thanh cong\n";
    mysql_close($conn);






?>