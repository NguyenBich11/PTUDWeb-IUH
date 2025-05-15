<?php 
    class mcuoiky {
        public function mOpen() {
            $host = 'localhost';
            $username = 'admin';
            $password = '123456';
            $db = 'qlbh_ck';

            return mysqli_connect($host, $username, $password, $db);
        }

        public function mClose($conn) {
            $conn->close($conn);
        }
    }
?>