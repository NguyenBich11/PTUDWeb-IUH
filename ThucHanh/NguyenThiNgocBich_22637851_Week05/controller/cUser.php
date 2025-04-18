<?php 
    include("model/mUser.php");

    class cUser{
        public function cLogin($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mLogin($username, $password);

            if($tblUser == 5) {
                echo "<script>alert('Lỗi kết nối')</script>";
            }elseif($tblUser == 4) {
                echo "<script>alert('Đăng nhập thành công')</script>";
                $_SESSION['login'] = true;
            }else {
                echo "<script>alert('Vui lòng đăng ký tài khoản')</script>";
            }
        }

        public function cRegister($username, $password, $rePassWord) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mRegister($username, $password, $rePassWord);

            if($tblUser == 5) {
                echo "<script>alert('Lỗi kết nối')</script>";
            }elseif($tblUser == 4) {
                echo "<script>alert('Đăng ký thành công')</script>";
            }elseif($tblUser == 6) {
                echo "<script>alert('Đăng ký không thành công')</script>";
            }elseif($tblUser == 3) {
                echo "<script>alert('Đã có người dùng')</script>";
            }
            // else {
            //     echo "<script>alert('Mật khẩu phải bằng nhau')</script>";
            // }

        }
    }
?>