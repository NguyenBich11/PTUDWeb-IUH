<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Thực hành Extra - Bài 3</title>
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
        $canh1 = $_REQUEST['canh1'];
        $canh2 = $_REQUEST['canh2'];
        $canh3 = $_REQUEST['canh3'];
        $loaiTG = '';

        if(isset($_REQUEST['btnCheck'])) {
            // Kiểm tra tính hợp lệ của tam giác, tổng bình phương 2 cạnh > cạnh còn lại
            if($canh1 > 0 && $canh2 > 0 && $canh3 > 0 &&
            ($canh1+$canh2 > $canh3) &&
            ($canh1 + $canh3 > $canh2) &&
            ($canh2 + $canh3 > $canh1)) {
                // Kiểm tra loại tam giác
                if($canh1 == $canh2 && $canh2 == $canh3) {
                    $loaiTG = 'Tam giác đều';
                }elseif($canh1 == $canh2 || $canh1 == $canh3 || $canh2 == $canh3){
                    if((pow($canh1, 2) + pow($canh2, 2) == pow($canh3, 2)) ||
                    (pow($canh1, 2) + pow($canh3, 2) == pow($canh2, 2)) ||
                    (pow($canh2, 2) + pow($canh3, 2) == pow($canh1, 2))) {
                        $loaiTG = 'Tam giác vuông cân';
                    }else {
                        $loaiTG = 'Tam giác cân';
                    }
                }elseif((pow($canh1, 2) + pow($canh2, 2) == pow($canh3, 2)) ||
                        (pow($canh1, 2) + pow($canh3, 2) == pow($canh2, 2)) ||
                        (pow($canh2, 2) + pow($canh3, 2) == pow($canh1, 2))){
                    $loaiTG = 'Tam giác vuông';
                }else {
                    $loaiTG = 'Tam giác thường';
                }
            }else {
                $loaiTG = 'Không có kết quả hợp lệ';
            }
        }
    ?>
    <div class="container">
        <header class="header">Nhận dạng tam giác</header>
        <main class="main">
            <form action="index.php" class="" method="GET">
                <div class="input-form">
                    <span>Cạnh 1:</span>
                    <input type="number" name="canh1" value="<?php echo $canh1;?>" require>
                    (cm)
                </div>
                <div class="input-form">
                    <span>Cạnh 2:</span>
                    <input type="number" name="canh2" value="<?php echo $canh2;?>" require>
                    (cm)
                </div>
                <div class="input-form">
                    <span>Cạnh 3:</span>
                    <input type="number" name="canh3" value="<?php echo $canh3;?>" require>
                    (cm)
                </div>
                <div class="input-form">
                    <span>Loại tam giác:</span>
                    <input type="text" class="result" value="<?php echo $loaiTG;?>" readonly>
                </div>
                <input type="submit" name="btnCheck" value="Nhận dạng" class="btnCheck">
            </form>
        </main>
    </div>
</body>
</html>