<?php
    class control_User{
        public function register($email, $pass) {
            $_SESSION["email"] = $email;
            $_SESSION["pass"] = $pass;
            
            return true;
        }

        public function login($email, $pass) {
            if($email == $_SESSION["email"] && $pass == $_SESSION["pass"]) {
                $_SESSION["login"] = true;
                return true;
            }
            return false;
        }
    }
?>