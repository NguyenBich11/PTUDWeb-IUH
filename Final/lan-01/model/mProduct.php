<?php 
    include("cuoiky.php");
    class mProduct {
        public function mGetAllProduct() {
            $p = new mcuoiky();
            $conn = $p->mOpen();

            if($conn) {
                $selectAllP = "SELECT * FROM `sanpahm` AS p JOIN `thuonghieu` AS t ON p.MaTH = t.MaTH";

                $tblProduct = $conn->query($selectAllP);

                if($tblProduct) {
                    return $tblProduct;
                }else {
                    return false;
                }
            }else {
                return false;
            }

            $conn->mClose($conn);
        }

        public function mGetAllProductByID($idProduct) {
            $p = new mcuoiky();
            $conn = $p->mOpen();

            if($conn) {
                $selectAllP = "SELECT * FROM `sanpahm` AS p JOIN `thuonghieu` AS t ON p.MaTH = t.MaTH WHERE p.MaSp = '$idProduct'";

                $tblProduct = $conn->query($selectAllP);

                if($tblProduct) {
                    return $tblProduct;
                }else {
                    return false;
                }
            }else {
                return false;
            }

            $conn->mClose($conn);
        }

        public function mUpdateProduct($idProduct, $nameProduct, $originalPrice, $sellingPrice, $img) {
            $p = new mcuoiky();
            $conn = $p->mOpen();

            if($conn) {
                $update = "UPDATE sanpahm SET TenSP='$nameProduct',
                GiaGoc='$originalPrice',GiaBan='$sellingPrice',HinhAnh='$img' WHERE MaSP = '$idProduct'";

                $rsUpdate = $conn->query($update);

                if($rsUpdate) {
                    return true;
                }else {
                    return false;
                }
            }else {
                return false;
            }

            $conn->mClose($conn);
        }
    }
?>