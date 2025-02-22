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
            background:#a026a7;
            text-align: center;
            text-transform: uppercase;
            padding: 2px;
            color: #fff;
        }

        .main {
            background-color: #c790c5;
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
        $toan = $_REQUEST['toan'];
        $ly = $_REQUEST['ly'];
        $hoa = $_REQUEST['hoa'];
        $diemChuan = $_REQUEST['diemChuan'];
        $tongDiem = $toan + $ly + $hoa;
        $result = (($toan != 0 && $ly != 0 && $hoa != 0) && $tongDiem>=$diemChuan) ? "Đậu" : "Rớt";
    ?>
    <div class="container">
        <header class="header">Kết quả thi đại học</header>
        <main class="main">
            <form action="index.php" name="formKQDH" method="POST">
                <div class="input-form">
                    <span>Toán:</span>
                    <input type="number" step="0.1" name="toan" value="<?php echo $toan;?>" required>
                </div>
                <div class="input-form">
                    <span>Lý:</span>
                    <input type="number" step="0.1" name="ly" value="<?php echo $ly;?>" required>
                </div>
                <div class="input-form">
                    <span>Hóa:</span>
                    <input type="number" step="0.1" name="hoa" value="<?php echo $hoa ?>" required>
                </div>
                <div class="input-form">
                    <span>Điểm chuẩn:</span>
                    <input type="number" step="0.1" name="diemChuan" value="<?php echo $diemChuan;?>" required>
                </div>
                <div class="input-form">
                    <span>Tổng điểm:</span>
                    <input type="number" name="tongDiem" value="<?php echo $tongDiem;?>" readonly>
                </div>
                <div class="input-form">
                    <span>Kết quả thi:</span>
                    <input type="text" name="result" value="<?php echo $result;?>" readonly>
                </div>
                <input type="submit" name="btnCheck" value="Xem kết quả" class="btnCheck">
            </form>
        </main>
    </div>
</body>
</html>