<?php 
    include("mConnect.php");
    class mUser{
        public function mLogin($username, $password) {
            $p = new mConnect();
            $conn = $p->mOpen();
            $selectSQL = "SELECT * FROM sinhvien WHERE username = '$username' and password = '$password'";

            if($conn) {
                return $conn->query($selectSQL);
            }else {
                return false;
            }

            $conn->mClose($conn);
        }

        public function mRegister($username, $password) {
            $p = new mConnect();
            $conn = $p->mOpen();
            $selectSQL = "INSERT INTO sinhvien(username, password) VALUES ('$username','$password')";

            if($conn) {
                return $conn->query($selectSQL);
            }else {
                return false;
            }

            $conn->mClose($conn);
        }
    }
?>