<?php

    class ketnoi{
        //1. mo ket noi 
        public function moketnoi(){
            $host = "localhost:3307";
            $user = "nguyenthaian8";
            $pass = "22656871";
            $db = "quanlysieuthi_8";

            $conn = mysqli_connect($host, $user, $pass, $db);

            if($conn){
                return $conn;
                echo "ket noi thanh cong";
            }
            else{
                echo "ket noi that bai";
            }

        }

        //2. dong ket noi 
        public function dongketnoi($conn){
            $conn -> close(); 
        }








    }







?> 