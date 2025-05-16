<?php 
    include("model/mBrand.php");

    class cBrand{
        public function cGetAllBrand() {
            $p = new mBrand();
            $tblBrand = $p->mGetAllBrand();

            if(!$tblBrand) {
                return false;
            }

            return $tblBrand;
        }
    }
?>