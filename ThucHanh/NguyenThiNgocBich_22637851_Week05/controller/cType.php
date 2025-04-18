<?php 
    include("model/mType.php");

    class cType{
        public function cgetAllType() {
            $p = new mType();
            $tblType = $p->mGetAllType();

            if(!$tblType) {
                echo "Không có dữ liệu";
            }

            return $tblType;
        }
    }
?>