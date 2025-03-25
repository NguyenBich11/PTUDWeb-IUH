<?php
    if(!isset($_SESSION{"LOGIN"})){
        echo "<script>alert('bạn can dang nhap truoc khi upload')</script>"; 
        exit(); 
    }
?> 
<form action="#" method="POST" enctype="multipart/form-data" name="form-upload">
    <h2>form upload file ng dùng: </h2>
    <input type="file" name="f_file[]" multiple>
    <button type="submit" name="upload" value="upload file">upload file</button>

    <button type="submit" name="delete_all" value="delete all file">delete all file</button> <br> <br>

    <?php
        $files = glob("image/*");
        foreach($files as $file){
            $base_name = basename($file);
            echo '<input type="checkbox" name="file_select[]" value="'. $base_name .'">'. $base_name. '';
            echo "<br>"; 

        }

    ?> 

<button type="submit" name="delete_select" value="delete file select">delete file select</button> 

    

</form>


<?php

    include("controller/cXuly.php");
    $p = new xuly();

    $file = $_FILES["f_file"] ?? null;
    $upload = $_POST["upload"] ?? null;


    if(isset($file) && isset($upload)){
        $p -> xuly_upload($file); 
    }

    if(isset($_POST["delete_all"])){
        $p -> delete_allfiles("image/"); 
    }

    if(isset($_POST["delete_select"])){
        $p -> delete_fileselect($_POST["file_select"] ?? []); 
    }

?> 