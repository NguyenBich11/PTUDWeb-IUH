<?php 
    class clsConnet{
        public function mOpen() {
            $host = 'localhost';
            $username = 'admin';
            $password = '123456';
            $db = 'thucHanh04';

            return mysqli_connect($host, $username, $password, $db);
        }

        public function mClose($conn) {
            $conn->close();
        }
    }
?>