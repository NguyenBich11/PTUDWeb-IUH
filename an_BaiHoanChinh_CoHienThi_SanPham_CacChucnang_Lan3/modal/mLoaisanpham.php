<?php

    class modalLoaisp{
        //in ra cac sloaij sp
        public function loai_sp(){
            $caulenh = "SELECT `id`, `tenloaisp` FROM `loaisanpham`"; 

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