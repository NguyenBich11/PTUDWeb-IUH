<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $file = $_FILES["ffile"];

       if($file["size"] > 1*1024*1024*1024)  {
            echo "Dung luong qua lon";
       }else {
            echo '<h1 style="color: red">Success</h1>';
            echo $file["name"]."<br>";
            echo $file["size"]."<br>";
            echo $file["type"]."<br>";
            echo $file["tmp_name"]."<br>";
            echo "<hr>";
           $des = './asset/'.$file["name"];
           move_uploaded_file($file["tmp_name"],$des);
       }

    ?>
</body>
</html>