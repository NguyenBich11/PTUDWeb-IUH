<!DOCTYPE html>

<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực hành tuần 02 - Bài 2.3</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <span>a = </span>
                    <input type="number" name="txta">
                </td>
                <td>
                    <span>b = </span>
                    <input type="number" name="txtb">
                </td>
                <td>
                    <input type="submit" name="txtCong" value="+">
                    <input type="submit" name="txtTru" value="-">
                    <input type="submit" name="txtNhan" value="*">
                    <input type="submit" name="txtChia" value="/">
                </td>
            </tr>
            </table>
            <span>
                <?php
                    $a = $_REQUEST['txta'];
                    $b = $_REQUEST['txtb'];
                    $rs;

                    $cong = $_REQUEST['txtCong'];
                    $tru = $_REQUEST['txtTru'];
                    $nhan = $_REQUEST['txtNhan'];
                    $chia = $_REQUEST['txtChia'];

                    if(isset($cong)) {
                        $rs = $a + $b;
                        echo 'Kết quả: ' . $a . $cong . $b . ' = ' . $rs;
                    }else if(isset($tru)) {
                        $rs = $a - $b;
                        echo 'Kết quả: ' . $a . $tru . $b . ' = ' . $rs;
                    }else if(isset($nhan)) {
                        $rs = $a * $b;
                        echo 'Kết quả: ' . $a . $nhan . $b . ' = ' . $rs;
                    }else if(isset($chia)) {
                        $rs = $a / $b;
                        echo 'Kết quả: ' . $a . $chia . $b . ' = ' . $rs;
                    }

                ?>
            </span>
    </form>
</body>
</html>