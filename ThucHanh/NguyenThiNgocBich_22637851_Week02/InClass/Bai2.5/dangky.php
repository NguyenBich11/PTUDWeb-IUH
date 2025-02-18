<!DOCTYPE html>
<?php
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực hành tuần 02 - Bài 2.5</title>
    <style>
        .container {
            margin: 0 auto;
            height: auto;
            width: 1000px;
            border: 1px solid #999;
        }

        .header{
            height: auto;
            width: 100%;
            background: #7df791;
            border-bottom: 1px solid #999;
            text-align: center;
        }

        .main {
            display: flex;
            min-height: 400px;
        }

        .nav {
            flex-grow: 1;
            border-right: 1px solid #999; 
            padding: 10px;
        }

        .content {
            flex-grow: 4;
            padding: 10px;
        }

        .footer {
            height: 60px;
            line-height: 60px;
            width: 1000px;
            background-color: #CCC;
            border-top: 1px solid #999;
            text-align: center;
        }

        .input-form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .formDK {
            margin-right: auto;
            margin-left: auto;
            width: 60%;
        }

        

    
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>BANKER WEBSITE</h1>
        </header>
        <main class="main">
            <nav class="nav">
                <h2 style='text-align: center'>Menu</h2>
                <a href="#">Trang chủ</a> <br>
                <a href="#">Đăng ký</a> <br>
                <a href="#">Đăng nhập</a> <br>
            </nav>
            <section class="content">
                <h2 style='text-align: center;'>Thông tin đăng nhập</h2>
                <form name="formDN" action="dangky.php" method="POST" class="formDK">
                    <div class="input-form">
                        <label>Thông tin tài khoản</label>
                        <input type="text" name="txtTK">
                    </div>

                    <div class="input-form">
                        <label >Email</label>
                        <input type="email" name="txtEmail">
                    </div>
                
                    <div class="input-form">
                        <label>Password</label>
                        <input type="password" name="txtPassword">
                    </div>

                    <div class="input-form">
                        <label>Nhập lại Password</label>
                        <input type="password" name="txtRePassword">
                    </div>

                    <div class="input-form">
                        <label >Thông tin cá nhân</label>
                        <input type="text" name="txtCN">
                    </div>

                    <div class="input-form">
                        <label >Họ tên</label>
                        <input type="text" name="txtTen">
                    </div>

                    <div class="input-form">
                        <label >Quê quán</label>
                        <select name="city">
                            <option value="Hồ Chí Minh" id="HCM">Hồ Chí Minh</option>
                            <option value="Long An" id="LA">Long An</option>
                            <option value="Bình Dương" id="BD">Bình Dương</option>
                            <option value="Tiền Giang" id="TG">Tiền Giang</option>
                        </select>
                    </div>

                    <div class="input-form">
                        <label >Điện thoại</label>
                        <input type="number" name="txtDT">
                    </div>

                    <div class="input-form">
                        <label >Giới tính</label>
                        <div class="input-form-input">
                            <input type="radio" name="txtGT" value="Nam"> Nam
                            <input type="radio" name="txtGT" value="Nữ"> Nữ
                        </div>
                    </div>

                    <div class="input-form">
                        <label>Sở thích</label>
                        <div class="input-form-input">
                            <input type="checkbox" name="txtST_xanh" value="Màu xanh"> Màu xanh
                            <input type="checkbox" name="txtST_do" value="Màu đỏ"> Màu đỏ
                            <input type="checkbox" name="txtST_dque" value="Đồng quê"> Đồng quê
                            <input type="checkbox" name="txtST_cnguyen" value="Cao nguyên"> Cao nguyên
                        </div>
                    </div>

                    <div class="input-form">
                        <label for=""></label>
                        <div class="input-form-input">
                            <input type="submit" name="btnDK" value="Đăng ký">
                            <input type="submit" name="btnLL" value="Làm lại">
                        </div>
                    </div>
                </form>

                <div>
                    <?php
                        if(isset($_POST['btnDK'])) {
                            $txtTK = $_REQUEST['txtTK'];
                            $txtEmail = $_REQUEST['txtEmail'];
                            $txtPassword = $_REQUEST['txtPassword'];
                            $txtRePassword = $_REQUEST['txtRePassword'];
                            $txtCN = $_REQUEST['txtCN'];
                            $txtTen = $_REQUEST['txtTen'];
                            $city = $_REQUEST['city'];
                            $txtDT = $_REQUEST['txtDT'];
                            $txtGT = $_REQUEST['txtGT'];

                            $sothich = [];
                            $txtST_xanh = $_REQUEST['txtST_xanh'];
                            $txtST_do = $_REQUEST['txtST_do'];
                            $txtST_dque = $_REQUEST['txtST_dque'];
                            $txtST_cnguyen = $_REQUEST['txtST_cnguyen'];

                            if(!empty($txtST_xanh)) $sothich[] = $txtST_xanh;
                            if(!empty($txtST_do)) $sothich[] = $txtST_do;
                            if(!empty($txtST_dque)) $sothich[] = $txtST_dque;
                            if(!empty($txtST_cnguyen)) $sothich[] = $txtST_cnguyen;

                            if($txtPassword != $txtRePassword){
                                echo '<span>Vui lòng nhập đúng mật khẩu của bạn!</span>';
                            }elseif(empty($txtTK) || empty($txtEmail) || empty($txtPassword) || empty($txtRePassword) 
                            || empty($txtCN) || empty($txtTen) || empty($city) || empty($txtDT) || empty($txtGT) 
                            || empty($sothich)) {
                                echo '<span>Vui lòng nhập đầy đủ thông tin trên</span>';
                            }else {
                                echo '<span>Thông tin tài khoản: ' . $txtTK . '</span><br>';
                                echo '<span>Email: ' . $txtEmail . '</span><br>';
                                echo '<span>Password: ' . $txtPassword . '</span><br>';
                                echo '<span>Xác nhận password: ' . $txtRePassword . '</span><br>';
                                echo '<span>Thông tin cá nhân: ' . $txtCN . '</span><br>';
                                echo '<span>Họ và tên: ' . $txtTen . '</span><br>';
                                echo '<span>Quê quán: ' . $city . '</span><br>';
                                echo '<span>Số điện thoại: ' . $txtDT . '</span><br>';
                                echo '<span>Giới tính: ' . $txtGT . '</span><br>';
                                echo '<span>Sở thích: ' . implode(', ', $sothich);
                                // foreach($sothich as $st) {
                                //     echo $st . ', ';
                                // }
                            }
                        }
                    ?>
                </div>
            </section>
        </main>
        <footer class="footer">Nguyễn Thị Ngọc Bích - 22637851</footer>
    </div>
</body>
</html>