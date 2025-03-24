<?php 
    include("mConnect.php");
    class mUser{
        public function mLogin($username, $password){
            $p = new mConnect();
            $conn = $p->mOpen();
            $selectSQL = "SELECT * FROM sinhvien WHERE username = '$username' and password = '$password'";

            if($conn) {
                return $conn->query($selectSQL);
            }else{
                return false;
            }

            $conn->mClose($conn);
        }

        public function mRegister($username, $password){
            $p = new mConnect();
            $conn = $p->mOpen();
            $selectSQL = "SELECT * FROM sinhvien WHERE username = '$username'";
            $tblCheck = $conn->query($selectSQL);

            if($tblCheck->num_rows > 0) {
                return 9; //da co nguoi dung
            }else {
                $insertSQL = "INSERT INTO sinhvien(username, password) VALUES ('$username','$password')";
                $resultInsert = $conn->query($insertSQL);

                if($resultInsert) {
                    return 3; //insert thanh cong
                }else {
                    return 4; //insert khong thanh cong
                }
            }

            $conn->mClose($conn);
        }
    }
?>