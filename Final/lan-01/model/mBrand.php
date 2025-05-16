<?php 
    include_once("cuoiky.php");

    class mBrand{
        public function mGetAllBrand() {
            $p = new mcuoiky();
            $conn = $p->mOpen();

            if($conn) {
                $selectAllBrand = "SELECT * FROM thuonghieu";
                $tblBrand = $conn->query($selectAllBrand);

                if($tblBrand) {
                    return $tblBrand;
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