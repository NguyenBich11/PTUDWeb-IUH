<?php 
    include("model/mProduct.php");

    class cProduct{
        public function cGetAllProduct() {
            $p = new mProduct();
            $tblProduct = $p->mGetAllProduct();

            if(!$tblProduct) {
                return false;
            }

            return $tblProduct;
        }

        public function cGetAllProductByID($idProduct) {
            $p = new mProduct();
            $tblProduct = $p->mGetAllProductByID($idProduct);

            if(!$tblProduct) {
                return false;
            }

            return $tblProduct;
        }

        public function cUpdateProduct($idProduct, $nameProduct, $originalPrice, $sellingPrice, $img) {
            $p = new mProduct();
            $rsUpdate = $p->mUpdateProduct($idProduct, $nameProduct, $originalPrice, $sellingPrice, $img);

            if(!$rsUpdate) {
                return false;
            }

            return true;
        }
    }
?>