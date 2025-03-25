<?php
    class modalSanpham{
        //1. hiển thị tất cả sản phẩm 
        public function sp_all(){
            $caulenh = "SELECT `ID`, `TENSP`, `GIASP`, `ID_LOAISP` FROM `sanpham` WHERE 1"; 

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

        //2. sp là bánh keo 
        public function sp_banhkeo(){
            $caulenh = "SELECT `ID`, `TENSP`, `GIASP`, `ID_LOAISP` FROM `sanpham` WHERE ID_LOAISP = 1"; 

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

        //3. sp la do uong
        public function sp_douong(){
            $caulenh = "SELECT `ID`, `TENSP`, `GIASP`, `ID_LOAISP` FROM `sanpham` WHERE ID_LOAISP = 2"; 

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

        //4. tìm kiếm sp 
        public function sp_timkiem($tensp){
            $caulenh = "SELECT `ID`, `TENSP`, `GIASP`, `ID_LOAISP` FROM `sanpham` WHERE TENSP LIKE '%$tensp%'"; 

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

        //5 thêm sản phẩm 
        public function them_sp($tensp, $giasp, $id_loaisp){
            $caulenh = "INSERT INTO `sanpham`(`TENSP`, `GIASP`, `ID_LOAISP`) VALUES ('$tensp','$giasp','$id_loaisp')"; 

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

        //6. xóa ssp 
        public function xoa_sp($idsp){
            $caulenh = "DELETE FROM `sanpham` WHERE ID = $idsp"; 

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