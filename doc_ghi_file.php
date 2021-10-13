<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   include './function.php';
   if(isset($_GET['upload'])&&$_GET['upload'] == 'file'){
    // echo "<pre>";  
    // var_dump($_FILES['file_upload']);exit;
    // echo "</pre>";
       $uploadedFiles = $_FILES ['file_upload'];
       $errors = uploadFiles($uploadedFiles);
       if(!empty($errors)){
           print_r($errors);
           exit;
       }
   }
   else{
       ?>
        <div id="upload_zone" class="box_content">
        <fieldset>
            <legend>Upload File</legend>
            <form action="?upload=file" id="upload-file-form" method="POST" enctype="multipart/form-data">
                <input multiple type="file" name="file_upload[]"/>
                <input type="submit" value="Upload File">
            </form>
        </fieldset>
    </div>
   <?php }?>
   ?>
</body>
</html>