<?php
    function uploadFiles($uploadedFiles){
        // echo 'Trong ham upload file <br/>';
        // echo '<pre>';
        // var_dump($uploadedFiles);exit;
        // echo '</pre>';
        $files = array();
        $errors = array();
        //xu ly gom du lieu vao tung file da upload
        foreach($uploadedFiles as $key =>$values){
            foreach($values as $index =>$value){
                $files[$index][$key] = $value;
            }
        }
        $uploadPath = "./uploads".date('d-m-Y',time());
        if(!is_dir($uploadPath)){
            mkdir($uploadPath);
        }
        foreach($files as $file){
            $file = validateUploadFile($file,$uploadPath);
            if($file != false){
                move_uploaded_file($file["tmp_name"],$uploadPath.'/' .$file["name"]);
            }
            else{
                $errors[] = "The file ".basename($file["name"]). "  isn't valid.";
            }
        }
        return $errors;
    }

?>