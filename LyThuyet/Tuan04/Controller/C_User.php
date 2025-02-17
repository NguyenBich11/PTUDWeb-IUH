<?php
    class C_User{
        public function dangKy($username, $password){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            return true;
        }

        public function dangNhap($username, $password) {
            if($_SESSION['username'] == $username && $_SESSION['password'] == $password) {
                $_SESSION['dangNhap'] = true;
                return true;
            }

            return false;
        }
    }
?>