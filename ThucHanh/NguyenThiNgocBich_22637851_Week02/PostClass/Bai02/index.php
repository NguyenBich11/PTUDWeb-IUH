<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Thực hành Extra - Bài 2</title>
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
            width: 80%;
            padding: 8px;
            display: flex;
            justify-content: space-between;
        }

        .input-form span {
            color: purple;
        }

        .btnCal {
            padding: 4px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        $banKinh = isset($_REQUEST['banKinh']) ? (int)$_REQUEST['banKinh'] : '';
        $rsDT = '';
        $rsCV = '';
        if(isset($_REQUEST['btnCal'])) {
            $rsDT = pow($banKinh, 2) * 3.14;
            $rsCV = $banKinh * 3.14;
        }
    ?>
    <div class="container">
        <header class="header">Diện tích và chu vi hình tròn</header>
        <main class="main">
            <form action="index.php" class="">
                <div class="input-form">
                    <span>Bán kính:</span>
                    <input type="number" name="banKinh">
                </div>
                <div class="input-form">
                    <span>Diện tích:</span>
                    <input type="number" name="dienTich" value="<?php echo $rsDT; ?>">
                </div>
                <div class="input-form">
                    <span>Chu vi:</span>
                    <input type="number" name="chuVi" 
                    value="<?php  echo $rsCV ; ?>">
                </div>
                <input type="submit" name="btnCal" value="Tính" class="btnCal">
            </form>
        </main>
    </div>
</body>
</html>