<?php 
    include_once("mConnect.php");
    class mType {
        public function mGetAllType() {
            $p = new mConnect();
            $conn = $p->mOpen();

            if($conn) {
                $sqlTypeOfProduct = "SELECT * FROM typeproduct";
                $tblTypeOfProduct = $conn->query($sqlTypeOfProduct);

                if($tblTypeOfProduct->num_rows > 0) {
                    return $tblTypeOfProduct; //co bang
                }else {
                    return null; //khong co du lieu
                }
            }else {
                return null; //loi ket noi
            }

            $p->mClose($conn);
        }
    }
?>