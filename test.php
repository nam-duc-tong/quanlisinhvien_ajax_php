<?php
    // if($_POST["name"] ||$_POST["age"]){
    //     if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
    //         die("Bien name khong hop le - nen la cac chu cai");
    //     }
    //     echo "Chao mung ".$_POST['name']."<br/>";
    //     echo "Ban ".$_POST['age']. " tuoi";
    //     exit();
    // }

    // if($_REQUEST["name"] || $_REQUEST["age"]){
    //     echo "chao mung ".$_REQUEST["name"]."<br/>";
    //     echo "Ban ".$_REQUEST['age']. " tuoi ";
    //     exit();
    // }
    // $filename = "file.txt";
    // $file = fopen($filename,"w");
    // if($file ==false){
    //     echo ("xay ra loi khi mo file");
    //     exit();
    // }  
    
    // fwrite($file,"vi du ghi file trong php.");
    // fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="<?php $_PHP_SELF?>" method="GET">
    Ho Ten: <input type="text" name="name"/>
    Tuoi: <input type="text" name ="age"/>
    <input type="submit"/>
    </form> -->
    <?php
    //========Doc file =================================
        // $filename = "file.txt";
        // $file = fopen($filename,"r");
        // if($file ==false){
        //     echo "Xay ra loi khi mo file";
        //     exit();
        // }
        // $filesize = filesize($filename);
        // $filetext = fread($file,$filesize);
        // fclose($file);

        // echo ("kich co cua file la: $filesize byte <br>");
        // echo ("Duoi day la noi dung cua file: <br>");
        // echo ("<pre>$filetext</pre>");
    //=======ghi file================================
            // $filename = "file.txt";
            // $file = fopen($filename,"r");
            // if($file ==false){
            //     echo "xay ra loi khi mo file";
            //     exit();
            // }
            // $filesize = filesize($filename);
            // $filetext = fread($file,$filesize);
            // fclose($file);
            // echo "Kich co cua file la: $filesize byte <br>";
            // echo "Ten file la: $filename <br>";
            // echo "Duoi day la noi ddung cua file";
            // echo "<br>";
            // echo "$filetext";

            function addFive($num){
                $num+=5;
            }
            function addSix(&$num){
                $num+=6;
            }
            $orignum = 10;
            addFive($orignum);
            echo "gia tri cua bien orignum la: $orignum<br>";
            addSix($orignum);
            echo "Gia tri bien orignum la: $orignum<br/>";
    ?>

</body>
</html>