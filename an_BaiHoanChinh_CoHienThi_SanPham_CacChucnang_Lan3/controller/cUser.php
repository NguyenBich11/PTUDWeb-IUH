<?php
    class controllUser{
        //1. xu ly dang ky
        public function xuly_dangky($tdn, $mk){
            include("modal/mUser.php");
            $p = new modalUser();

            $pass_mahoa = md5($mk);

            $user = $p -> dangky($tdn, $pass_mahoa);

            if(!$user){
                echo "<script>alert('username bị trùng trong database'); window.location.href='index.php'</script>"; 
            }
            else{
                echo "<script>alert('dang ky thanh cong !!!'); window.location.href='index.php'</script>"; 
            }

        }

        //2. xu ly dang nhap
        public function xuly_dangnhap($tdn, $mk){
            include("modal/mUser.php");
            $p = new modalUser();

            $pass_mahoa = md5($mk);

            $user = $p -> dangnhap($tdn, $pass_mahoa);

            if(!$user){
                echo "<script>alert('lỗi kết nối'); window.location.href='index.php'</script>"; 
            }
            else if($user -> num_rows > 0){
                $_SESSION["LOGIN"] = true; 
                echo "<script>alert('dang nhap thanh cong !!!'); window.location.href='index.php'</script>"; 
            }
            else{
                echo "<script>alert('dang nhap that bai !!!'); window.location.href='index.php'</script>"; 
            }

        }









    }






?> 