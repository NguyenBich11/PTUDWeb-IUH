<?php
    class xuly{
        //1. xử lý file ở đây 
        public function xuly_upload($file){
            echo "<pre>". var_dump($file) ."</pre>";
        
            foreach ($file["name"] as $key => $name) {
                if($this -> check_ext($name)){
                    echo "file đúng đuôi";
                    echo "<br>";

                    //tên mới
                    $newname = $this -> rename_file($name);
                    echo "tên của các file mới: $newname";
                    echo "<br>"; 

                    //upload vào folder
                    $folder = "image/";
                    $add_folder = $folder . $newname;
                    if(move_uploaded_file($file["tmp_name"][$key], $add_folder)){
                        echo "add vào fodlder: $add_folder thành công";
                        echo "<br>";
                    }
                    else{
                        echo "add vào folder thất bại"; 
                    }
                }
                else{
                    echo "file phải là đuôi .jpg"; 
                }
            }
            
        }

        //2. chcek đuôi 
        private function check_ext($name){
            $ext = pathinfo($name, PATHINFO_EXTENSION);

            if(in_array($ext, ['jpg'])){
                return true;
            }
            else{
                return false;
            }
        }

        //3. đổi tên file
        private function rename_file($name){
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $filename = pathinfo($name, PATHINFO_FILENAME);

            $filename = "nguyenthaian";
            return $newname = $filename . "_" . rand(1000, 9999) . "." . $ext; 
        }

        //4. xóa file đã add trong folder  - tất cả
        public function delete_allfiles($folder){
            $files = glob($folder . "*");

            foreach($files as $file){
                if(is_file($file)){
                    unlink($file);
                }
                echo "xóa file thành công"; 
            }

    

        }

        //5. xóa file tùy chọn
        public function delete_fileselect($files){
            foreach($files as $file){
                $thumuc = "image/" . $file;

                if(file_exists($thumuc)){
                    unlink($thumuc); 
                }
                echo "xóa file thành công";
            }
        }
        











    }







?> 