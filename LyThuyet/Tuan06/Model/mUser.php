<?php 
    include('mConnect.php');

    class mUser{
        public function mLogin($userName, $password) {
            $strLogin = "select * from user where username='$userName' and password = '$password'";
            $p = new ClsConnet();
            $conn = $p->connectOpen();

            if($conn) {
                return $conn->query($strLogin);
            }else {
                return false;
            }

            $conn->connectClose($conn);
        }
    }
?>