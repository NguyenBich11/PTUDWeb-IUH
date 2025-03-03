<?php
    class ClsConnet{
        public function connectOpen() {
            $host = 'localhost';
            $userName = 'admin';
            $password = '123456';
            $db = 'quanlybanhang';

            return mysqli_connect($host, $userName, $password, $db);
        }

        public function connectClose($conn) {
            $conn->close();
        }
    }
?>