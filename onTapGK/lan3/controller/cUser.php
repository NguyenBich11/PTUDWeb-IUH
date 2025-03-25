<?php 
    include("model/mUser.php");
    class cUser {
        public function cLogin($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mLogin($username, $password);

            if(!$tblUser) {
                echo "<script>alert('Không kết nối được với database')</script>";
            }elseif($tblUser->num_rows > 0) {
                echo "<script>alert('Đăng nhập thành công')</script>";
                $_SESSION['login'] = true;
                header("refresh:0.1;url=index.php");
            }else {
                echo "<script>alert('Không có người dùng')</script>";
            }
        }

        public function cRegister($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mRegister($username, $password);

            if($tblUser == 2) {
                echo "<script>alert('Đã có người dùng')</script>";
            }elseif($tblUser == 4) {
                echo "<script>alert('Đăng ký thành công')</script>";
                $_SESSION['username'] = true;
                header("refresh:0.1;url=index.php");
            }else {
                echo "<script>alert('Đăng ký không thành công, vui lòng liên hệ quản trị viên')</script>";
            }
        }
    }
?>