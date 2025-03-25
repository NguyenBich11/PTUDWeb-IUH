<?php 
    include("mConnect.php");
    class mUser{
        public function mLogin($username, $password) {
            $p = new mConnect();
            $conn = $p->mOpen();
            $selectSQl = "SELECT * FROM sinhvien WHERE username = '$username' and password = '$password'";

            if($conn) {
                return $conn->query($selectSQl);
            }else {
                return 3; //không kết nối được databse
            }

            $conn->nClose($conn);
        }

        public function mRegister($username, $password) {
            $p = new mConnect();
            $conn = $p->mOpen();
            $selectSQl = "SELECT * FROM sinhvien WHERE username = '$username'";
            $rsSelect = $conn->query($selectSQl);

            if($rsSelect->num_rows > 0) {
                return 2; //đã co người dùng
            }else {
                $insertSQl = "INSERT INTO sinhvien(username, password) VALUES('$username', '$password')";
                $rs = $conn->query($insertSQl);

                if($rs) {
                    return 4; //đăng ký thnahf công
                }else {
                    return 5; //đăng ký không thnahf công
                }
            }

            $conn->nClose($conn);
        }
    }
?>