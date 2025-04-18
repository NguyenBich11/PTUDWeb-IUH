<?php 
    include_once("mConnect.php");
    class mUser{
        public function mLogin($username, $password) {
            $p = new mConnect();
            $conn = $p->mOpen();

            if($conn) {
                $sqlLogin = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
                $tblUser = $conn->query($sqlLogin);

                if($tblUser->num_rows > 0) {
                    return 4; // dang nhap thanh cong
                }else{
                    return 2; // chua co nguoi dung, vui long dang ky tai khoan
                }
            }else {
                return 5; //khong ket noi duoc voi csdl
            }

            $conn->mClose($conn);
        }

        public function mRegister($username, $password, $rePassWord) {
            $p = new mConnect();
            $conn = $p->mOpen();

            if($conn) {
                if($password !== $rePassWord) {
                    return 7; //mật khẩu không bằng nhau
                }

                $sqlCheckUser = "SELECT * FROM user WHERE username = '$username'";
                $resultCheckUser = $conn->query($sqlCheckUser);

                if($resultCheckUser->num_rows > 0) {
                    $insertSQL = "INSERT INTO user(username, password) VALUES ('$username','$password')";
                    $resultAddUser = $conn->query($insertSQL);

                    if($resultAddUser) {
                        return 4; // dang ky thanh cong
                    }else {
                        return 6; //đăng ký không thành công
                    }
                }else{
                    return 3; // đã có người dùng
                }
            }else { 
                return 5; //khong ket noi duoc voi csdl
            }

            $conn->mClose($conn);
        }
    }
?>