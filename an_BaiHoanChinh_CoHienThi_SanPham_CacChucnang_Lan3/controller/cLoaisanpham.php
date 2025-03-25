<?php

    class controllLoaisp{
        //1. in ra tên các loại sp 
        public function display_ten_loaisp(){
            include("modal/mLoaisanpham.php");
            $p = new modalLoaisp();


            return $loaisp = $p -> loai_sp(); 




        }



    }






?> 