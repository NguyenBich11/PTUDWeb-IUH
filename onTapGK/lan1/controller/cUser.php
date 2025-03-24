<?php 
    include("model/mUser.php");
    class cUser{
        public function cLogin($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mLogin($username, $password);

            if(!$tblUser) {
                echo "<script>alert('Loi ket noi')</script>";
            }elseif($tblUser->num_rows > 0) {
                echo "<script>alert('Dang nhap thanh cong')</script>";
                header("refresh:0.1;url=index.php");
                $_SESSION['login'] = true;
            }else {
                echo "<script>alert('Sai thong tin dang nhap')</script>";
            }
        }

        public function cRegister($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mRegister($username, $password);

            if($tblUser == 9) {
                echo "<script>alert('Da co nguoi dung')</script>";
            }elseif($tblUser == 3) {
                echo "<script>alert('Dang ky thanh cong')</script>";
                header("refresh: 0.1;url=index.php");
                $_SESSION['username'] = true;
            }elseif($tblUser == 4) {
                echo "<script>alert('Khong the dang ky')</script>";
            }else {
                echo "<script>alert('Khong the ket noi')</script>";
            }
        }
    }
?>