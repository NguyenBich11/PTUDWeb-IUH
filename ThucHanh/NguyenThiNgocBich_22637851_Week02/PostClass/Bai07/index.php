<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Thực hành Extra - Bài 7</title>
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
            min-width: 50px; 
            flex: 1;
        }

        .input-items {
            display: flex;
            justify-content: space-between;
            width: 50%;
        }

        .input-items span {
            text-align: center;
            color: black;
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
        $a = (int)$_REQUEST['a'];
        $b = (int)$_REQUEST['b'];
        $result = '';
        
        if(isset($_REQUEST['btnCheck'])) {
            if($a != 0) {
                $x = -$b / $a;
                $result = number_format($x, 1);
            }else {
                $result = ($b == 0) ? 'Phương trình có vô số nghiệm' : "Phương trình vô nghiệm";
            }
        }
        
    ?>
    <div class="container">
        <header class="header">Giải phương trình bậc nhất</header>
        <main class="main">
            <form action="index.php" class="" method="GET">
                <div class="input-form">
                    <span>Phương trình:</span>
                    <div class="input-items">
                        <input type="number" name="a" value="<?php echo $a;?>" required>
                        <span>x +</span> 
                        <input type="number" name="b" value="<?php echo $b;?>" required> 
                        <span>= 0</span>
                    </div>
                </div>
                <div class="input-form">
                    <span>Kết quả:</span>
                    <input type="text" class="result" name="result" value="<?php echo $result;?>" readonly>
                </div>
                <input type="submit" name="btnCheck" value="Giải phương trình" class="btnCheck">
            </form>
        </main>
    </div>
</body>
</html>