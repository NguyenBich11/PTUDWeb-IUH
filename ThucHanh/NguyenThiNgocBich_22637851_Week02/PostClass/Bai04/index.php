<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Thực hành Extra - Bài 4</title>
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
        $canhA = $_REQUEST['canhA'];
        $canhB = $_REQUEST['canhB'];
        $canhHuyen = '';

        if(isset($_REQUEST['btnCheck'])) {
            if($canhA > 0 && $canhB > 0) {
                $canhHuyen = round(sqrt(pow($canhA, 2) + pow($canhB, 2)), 3);
            }else {
                $canhHuyen = 'Nhập số cạnh hợp lệ';
            }
        }
    ?>
    <div class="container">
        <header class="header">Cạnh huyền tam giác vuông</header>
        <main class="main">
            <form action="index.php" class="" method="GET">
                <div class="input-form">
                    <span>Cạnh A:</span>
                    <input type="number" name="canhA" value="<?php echo $canhA;?>" require>
                    (cm)
                </div>
                <div class="input-form">
                    <span>Cạnh B:</span>
                    <input type="number" name="canhB" value="<?php echo $canhB;?>" require>
                    (cm)
                </div>
                <div class="input-form">
                    <span>Cạnh huyền:</span>
                    <input type="text" class="result" value="<?php echo $canhHuyen;?>" readonly>
                </div>
                <input type="submit" name="btnCheck" value="Tính" class="btnCheck">
            </form>
        </main>
    </div>
</body>
</html>