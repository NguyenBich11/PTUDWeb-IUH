<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1.4</title>
    <style>
        .a_0 {
            font-weight: bold;
        }

        .a_1 {
            font-weight: normal;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php
        for($i=1; $i<31; $i++) {
            echo '<span class="a_'.($i%2).'">'.$i.'</span>'." ";
        }
    ?>
</body>
</html>