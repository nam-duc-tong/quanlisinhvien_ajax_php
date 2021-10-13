<?php
    require_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   <title>Document</title>
  <title>Bootstrap Example</title>
  <style>
      p{
          text-align: center;
      }
      .container{
          margin-top:30px;
      }
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                $sql = 'select * from sanpham';
                $result = executeResult($sql);
                foreach($result as $sanpham){
                    echo '<div class="col-md-3">
                            <img src="" alt="vay den ca tinh">
                            <p>Vay Den Ca Tinh</p>
                            <p>280.000 VND<del>450.000 VND</del></p>
                          </div>'
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>