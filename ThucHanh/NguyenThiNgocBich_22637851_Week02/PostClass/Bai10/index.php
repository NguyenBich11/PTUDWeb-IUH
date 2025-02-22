<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Thực hành Extra - Bài 9</title>
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
            background:#396b67;
            text-align: center;
            text-transform: uppercase;
            padding: 2px;
            color: #fff;
        }

        .main {
            background-color: #90c6c7;
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
            color: black;
            width: 30%;
            text-align: left;
        }

        .input-form .input__number{
            min-width: 80px; 
            flex: 1;
        }

        .btnCheck {
            padding: 4px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        $startH = $_REQUEST['startH'];
        $endH = $_REQUEST['endH'];
        $bill = 0;

        if(isset($_REQUEST['btnCheck'])) {
            if($startH < $endH) {
                for($i = $startH; $i <= $endH; $i++) {
                    if($i >= 10 && $i <= 17) {
                        $bill =  ($endH - $startH) * 20000;
                    }elseif($i > 17 && $i <= 24) {
                        $bill =  ($endH - $startH) * 45000;
                    }
                }
            }else {
                echo '<script>alert("Giờ kết thúc phải > giờ bắt đầu")</script>';
            }
        }
    ?>
    <div class="container">
        <header class="header">Tính tiền Karaoke</header>
        <main class="main">
            <form action="index.php" name="formKQDH" method="POST">
                <div class="input-form">
                    <span>Giờ bắt đầu:</span>
                    <input type="number" class="input__number" name="startH" min="10" value="<?php echo $startH;?>" required>
                    <span>(h)</span>
                </div>
                <div class="input-form">
                    <span>Giờ kết thúc:</span>
                    <input type="number" class="input__number" name="endH" max="24" value="<?php echo $endH;?>" required>
                    <span>(h)</span>
                </div>
                <div class="input-form">
                    <span>Tiền thanh toán:</span>
                    <input type="number" class="input__number" name="bill" value="<?php echo $bill;?>" readonly>
                    <span>(VNĐ)</span>
                </div>
                <input type="submit" name="btnCheck" value="Tính tiền" class="btnCheck">
            </form>
        </main>
    </div>
</body>
</html>