<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Thực hành Extra - Bài 5</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }
        .container {
            width: 460px;
            height: max-content;
        }

        .header{
            background: #a36f10;
            text-align: center;
            text-transform: uppercase;
            padding: 2px;
            color: #452406;
        }

        .main {
            background-color: #d4bb8f;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
            padding: 8px;
        }

        .input-form {
            width: 100%;
            padding: 8px;
            display: flex;
            justify-content: space-between;
        }

        .input-form span {
            color: purple;
            width: 50%;
            text-align: left;
        }

        .input-form input{
            min-width: 100px; 
            flex: 1;
        }

        .btnCheck {
            padding: 4px;
            font-size: 20px;
        }

        .result {
            background: #f9caca;
            padding: 8px;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
        $n = (int)$_REQUEST['n'];
        $result = 0;
        
        if(isset($_REQUEST['btnCheck'])) {
            for($i = 0; $i <= $n; $i++) {
                $result +=$i;
            }
        }
        
    ?>
    <div class="container">
        <header class="header">Tính tổng của dãy n</header>
        <main class="main">
            <form action="index.php" class="" method="GET">
                <div class="input-form">
                    <span>Nhập n:</span>
                    <input type="number" name="n" value="<?php echo $n;?>" require>
                </div>
                <div class="input-form">
                    <span>Kết quả:</span>
                    <input type="number" class="result" name="result" value="<?php echo $result;?>" readonly>
                </div>
                <input type="submit" name="btnCheck" value="Tính" class="btnCheck">
            </form>
        </main>
    </div>
</body>
</html>