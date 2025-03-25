<?php

    class modalUser{
        //1. đănng ký
        public function dangky($tdn, $mk){
            $caulenh = "INSERT INTO `user`(`username`, `password`) VALUES ('$tdn','$mk')"; 

            include_once("mKetnoi.php");
            $p = new ketnoi();
            $conn = $p -> moketnoi();


            if($conn){
                return $conn -> query($caulenh);
            }
            else{
                return false;
            }

            $p -> dongketnoi($conn); 
        }

        //2. đăng nhập
        public function dangnhap($tdn, $mk){
            $caulenh = "SELECT * FROM `user` WHERE username = '$tdn' and password = '$mk'"; 

            include_once("mKetnoi.php");
            $p = new ketnoi();
            $conn = $p -> moketnoi();


            if($conn){
                return $conn -> query($caulenh);
            }
            else{
                return false;
            }

            $p -> dongketnoi($conn); 
        }






    }






?> 