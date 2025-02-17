<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8 extra</title>
</head>
<body>
    <ul>
        <?php
            $list = array("alpha", "beta", "gamma", "delta", "epsilon");

            foreach($list as $val) {
                echo '<li>'.$val.'</li>';
            }
        ?>
    </ul>
</body>
</html>