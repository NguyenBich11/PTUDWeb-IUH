<?php 
    include('mConnect.php');
    class clsUser{
        public function mLogin($userName, $password) {
            $selectSQL = "select * from user where username = '$userName' and password = '$password'";
            $p = new clsConnet();
            $conn = $p->mOpen();

            if($conn) {
                return $conn->query($selectSQL);
            }else {
                return false;
            }

            $conn->mClose($conn);
        }

        public function mRegister($userName, $password) {
            $p = new clsConnet();
            $conn = $p->mOpen();
            $selectUser = "select * from user where username = '$userName'";
            $tblUser = $conn->query($selectUser);

            if($tblUser->num_rows > 0) {
                return 9;
            }else {
                $insertSQL = "insert into user(id, username, password) values('', '$userName', '$password')";
    
                if($conn) {
                    $rs = $conn->query($insertSQL);
    
                    if($rs) {
                        return 1;
                    }else {
                        return 2;
                    }
                }else {
                    return 3;
                }
            }

            $conn->mClose($conn);
        }
    }
?>