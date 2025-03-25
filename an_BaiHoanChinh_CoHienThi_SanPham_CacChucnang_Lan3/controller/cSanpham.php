<?php


    class controllSanpham{
        //1. hiển thị tên tất cẩ sp 
        public function display_all_sp(){
            include_once("modal/mSanpham.php");

            $p = new modalSanpham();


            return $loaisp = $p -> sp_all(); 
        }

        //2. banh keo
        public function display_sp_banhkeo(){
            include_once("modal/mSanpham.php");

            $p = new modalSanpham();


            return $loaisp = $p -> sp_banhkeo(); 
        }

        //3. do uong 
        public function display_sp_douong(){
            include_once("modal/mSanpham.php");

            $p = new modalSanpham();


            return $sanpham = $p -> sp_douong(); 
        }

        //4. tìm kiếm
        public function display_sp_timkiem($tensp){
            include_once("modal/mSanpham.php");

            $p = new modalSanpham();

            return $sanpham = $p -> sp_timkiem($tensp); 
        }

        //5. thêm sp 
        public function thucthi_themsp($tensp, $giasp, $id_loaisp){
            include_once("modal/mSanpham.php");

            $p = new modalSanpham();


            return $sanpham = $p -> them_sp($tensp, $giasp, $id_loaisp); 

            
        }

        //6. xóa sp 
        public function thucthi_xoasp($idsp){
            include_once("modal/mSanpham.php");

            $p = new modalSanpham();


            return $sanpham = $p -> xoa_sp($idsp); 

            
        }



        


    }



?> 