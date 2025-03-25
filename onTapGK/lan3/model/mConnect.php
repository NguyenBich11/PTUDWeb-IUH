<?php
    class mConnect {
        public function mOpen() {
            $host = 'localhost';
            $username = '22637851';
            $password = 'ngocbich';
            $db = 'giuaki';

            return mysqli_connect($host, $username, $password, $db);
        }

        public function mClose($conn) {
            $conn->close($conn);
        }
    }
?>
