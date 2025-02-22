<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Thực hành Extra - Bài 8</title>
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
        $hk1 = $_REQUEST['hk1'];
        $hk2 = $_REQUEST['hk2'];
        $diemTB = number_format(($hk1 + ($hk2*2))/3, 2);
        $result = ($diemTB >= 5) ? 'Được lên lớp' : 'Ở lại lớp';
        $xepLoai = '';
        
        if(isset($_REQUEST['btnCheck'])) {
            if(($hk1 >= 0 && $hk1 <= 10) && ($hk2 >= 0 && $hk2 <= 10)) {
                if($diemTB >= 8) {
                    $xepLoai = 'Giỏi';
                }elseif($diemTB >= 6.5 && $diemTB < 8) {
                    $xepLoai = "Khá";
                }elseif($diemTB >= 5 && $diemTB < 6.5) {
                    $xepLoai = 'Trung bình';
                }else {
                    $xepLoai = 'Yếu';
                }
            }else {
                echo '<script>alert("Vui lòng nhập số điểm trong 0 - 10!")</script>';
            }
        }
    ?>
    <div class="container">
        <header class="header">Kết quả học tập</header>
        <main class="main">
            <form action="index.php" name="formKQHT" method="POST">
                <div class="input-form">
                    <span>Điểm HK1:</span>
                    <input type="number" step="0.1" name="hk1" value="<?php echo $hk1?>" required>
                </div>
                <div class="input-form">
                    <span>Điểm HK2:</span>
                    <input type="number" step="0.1" name="hk2" value="<?php echo $hk2;?>" required>
                </div>
                <div class="input-form">
                    <span>Điểm trung bình:</span>
                    <input type="number" name="diemTB" value="<?php echo $diemTB?>" readonly>
                </div>
                <div class="input-form">
                    <span>Kết quả:</span>
                    <input type="text" name="result" value="<?php echo $result?>" readonly>
                </div>
                <div class="input-form">
                    <span>Xếp loại học lực:</span>
                    <input type="text" name="xepLoai" value="<?php echo $xepLoai?>" readonly>
                </div>
                <input type="submit" name="btnCheck" value="Xem kết quả" class="btnCheck">
            </form>
        </main>
    </div>
</body>
</html>