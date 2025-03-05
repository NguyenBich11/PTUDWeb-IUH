<?php
    include_once('Model/mUser.php');
    class cUser{
        public function cLogin($userName, $password) {
            $p = new clsUser();
            $pass = md5($password);
            $tblUser = $p->mLogin($userName, $pass);

            if(!$tblUser) {
                echo "<script>alert('Lỗi kết nối!')</script>";
            } elseif($tblUser->num_rows > 0) {
                echo "<script>alert('Đăng nhập thành công!')</script>";
                $_SESSION['login'] = true;
            } else {
                echo "<script>alert('Sai thông tin đăng nhập!')</script>";
            }

            header("refresh:0.5;url='index.php'");
        }

        public function cRegister($userName, $password) {
            $p = new clsUser();
            $pass = md5($password);
            $tblUser = $p->mRegister($userName, $pass);

            if($tblUser == 9) {
                echo "<script>alert('Tên đăng ký đã tồn tại!')</script>";
            }else if($tblUser == 1) {
                echo "<script>alert('Đăng ký thành công!')</script>";
                // header("refresh=0.5; url='login.php");
            }else if($tblUser == 2){
                echo "<script>alert('Đăng ký không thành công!')</script>";
            }else {
                echo "<script>alert('Lỗi kết nối')</script>";
            }
            
        }
        
    }
?>