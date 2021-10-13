<?php
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE = 'banhang';
function createDatabase(){
   //connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD);
    mysqli_set_charset($conn,'utf8');
    //create query
    $sql = 'create database if not exists'.DATABASE;
    mysqli_query($conn,$sql);
    
    //close connection
    mysqli_close($conn); 
} 
function createTables(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn,'utf8');
    //create query
    $sql = 'create table if not exists sanpham(
        id int primary key auto_increment,
        thumbnail varchar(200),
        title varchar(150) not null,
        price int default 0,
        discount int default 0
    )';
    mysqli_query($conn,$sql);
    
    //close connection
    mysqli_close($conn);
}
function initData(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn,'utf8');
    //create query
    for($i=0; $i<20; $i++){
        $sql = 'insert into sanpham(thumbnail,title,price,discount)values("product3.jpg","Vay Den Ca Tinh -'.$i.'","'.(200000+20*$i).'","'.(100000+20*$i).'")';
        mysqli_query($conn,$sql);    
    }
    //close connection
    mysqli_close($conn);
}
function executeResult($sql){
    $conn = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
    mysqli_set_charset($conn,'utf8');
    //create query
    $data = [];
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result,1)){
        $data[] = $row;
    }  
    //close connection
    mysqli_close($conn);
    return $data;
}
//init data -- goi 1 lan
createDatabase();  
createTables();
initData();
?>