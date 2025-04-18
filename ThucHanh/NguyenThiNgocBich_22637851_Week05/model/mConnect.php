<?php 
    class mConnect{
        public function mOpen() {
            $host = 'localhost';
            $username = 'ngocbich';
            $password = '123456';
            $db = 'qlbh';

            return mysqli_connect($host, $username, $password, $db);
        }

        public function mClose($conn) {
            $conn->close($conn);
        }
    }
?>