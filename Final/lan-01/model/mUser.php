<?php 
    include_once("cuoiky.php");

    class mUser {
        public function mLogin($username, $password) {
            $p = new mcuoiky();
            $conn = $p->mOpen();
            $select = "SELECT * FROM nguoidung WHERE TenNguoiDung = '$username' AND MatKhau = '$password'";

            if($conn) {
                return $conn->query($select);
            }else {
                return false; //khong ket noi duoc voi csdl
            }

            $conn->mClose($conn);
        }
    }
?>