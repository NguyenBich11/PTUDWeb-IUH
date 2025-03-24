<?php 
    include("model/mUser.php");
    class cUser{
        public function cLogin($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mLogin($username, $password);

            if(!$tblUser) {
                echo "<script>alert('Không thể kết nối database')</script>";
            }elseif($tblUser->num_rows > 0) {
                echo "<script>alert('Đăng nhập thành công')</script>";
                $_SESSION['login'] = true;
                header("refresh:0.1;url=index.php");
            }else {
                echo "<script>alert('Sai thông tin đăng nhập')</script>";
            }
        }

        public function cRegister($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $isUser = $p->mRegister($username, $password);

            if(!$isUser) {
                echo "<script>alert('Đăng ký không thành công, đã cps người dùng')</script>";
            }elseif($isUser) {
                echo "<script>alert('Đăng ký thành công')</script>";
                $_SESSION['username'] = true;
                header("refresh:0.1;url=index.php");
            }else {
                echo "<script>alert('Không thể kết nối database')</script>";
            }
        }
    }
?>