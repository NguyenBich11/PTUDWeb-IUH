<?php 
    include("model/mUser.php");
    class cUser {
        public function cLogin($username, $password) {
            $p = new mUser();
            $password = md5($password);
            $tblUser = $p->mLogin($username, $password);

            if($tblUser == false) {
                echo "<script>alert('Không kết nối được cơ sở dữ liệu')</script>";
            }elseif($tblUser->num_rows > 0) {
                echo "<script>alert('Đăng nhập thành công')</script>";
                $_SESSION['login'] = true;
                header("refresh:0.1;url=index.php?act=admin");
            }else {
                echo "<script>alert('Bạn chưa đăng nhập')</script>";
            }
        }
    }
?>