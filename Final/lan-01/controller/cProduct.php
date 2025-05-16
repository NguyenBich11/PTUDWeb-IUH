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

        public function cUpdateProduct($idProduct, $nameProduct, $originalPrice, $sellingPrice, $img, $idBrand) {
            $p = new mProduct();
            $rsUpdate = $p->mUpdateProduct($idProduct, $nameProduct, $originalPrice, $sellingPrice, $img, $idBrand);

            if(!$rsUpdate) {
                return false;
            }

            return true;
        }

        public function cDeleteProduct($idProduct) {
            $p = new mProduct();
            $rsDelete = $p->mDeleteProduct($idProduct);

            if(!$rsDelete) {
                return false;
            }

            return true;
        }

        public function cAddProduct($nameP, $originalPrice, $sellingPrice, $img, $idBrand) {
            $p = new mProduct();
            $rsAdd = $p->mAddProduct($nameP, $originalPrice, $sellingPrice, $img, $idBrand);

            if(!$rsAdd) {
                return false;
            }

            return true;
        }
    }
?>