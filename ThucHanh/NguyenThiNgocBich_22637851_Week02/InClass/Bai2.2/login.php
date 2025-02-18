<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực hành tuần 02 - Bài 2.2</title>
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
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .formDN {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
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
                <form name="formDN" action="login.php" method="POST" class="formDN">
                    <div class="input-form">
                        <label>Email</label>
                        <input type="email" name="txtEmail">
                    </div>
                    <div class="input-form">
                        <label>Password</label>
                        <input type="password" name="txtPassword">
                    </div>
                    <div class="input-form">
                        <label for=""></label>
                        <div class="input-form-input">
                            <input type="checkbox"> <span>Nhớ thông tin đăng nhập</span> 
                        </div>
                    </div>
                    <br>
                    <div class="input-form">
                        <label for=""></label>
                        <div class="input-form-input">
                            <input type="submit" name="btnDN" value="Đăng nhập">
                            <input type="submit" name="btnLL" value="Làm lại">

                        </div>
                    </div>
                </form>

                <div>
                <?php
                    if(isset($_POST['btnDN'])) {
                        $inputEmail = $_REQUEST['txtEmail'];
                        $inputPassw = $_REQUEST['txtPassword'];

                        $valueEmail = 'abc@gmail.com';
                        $valuePassW = '123456';
                        
                        if($inputEmail == $valueEmail && $inputPassw == $valuePassW) {
                            echo '<span>Chúc mừng đăng nhập thành công!<span>';
                        }else {
                            echo '<span>Đăng nhập thất bại<span>';
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