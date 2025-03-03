<?php
    session_start();
    include('Model/mUser.php');

    class cUser{
        public function cLogin($userName, $pass) {
            $p = new mUser();
            $password = md5($pass);
            $tblUser = $p->mLogin($userName, $password);

            if(!$tblUser) {
                echo "<script>alert('Lỗi kết nối!')</script>";
            }elseif($tblUser->num_rows > 0) {
                echo "<script>alert('Đăng nhập thành công!')</script>";
                $_SESSION['login'] = true;
            }else {
                echo "<script>alert('Sai thông tin đăng nhập')</script>";
            }

            header("refresh:0.5; url='index.php'");
        }
    }
?>