<?php 
    class cUpload {
        public function cXuly($files) {
            // $filename = pathinfo($files['name']);

            // echo var_dump($filename);

            foreach($files['name'] as $key=>$value) {
                $file = [
                    'name'=> $files['name'][$key],
                    'size'=> $files['size'][$key],
                    'type'=> $files['type'][$key],
                    'tmp_name'=> $files['tmp_name'][$key]
                ];

                if($this->checkSize($file['size'])) {
                    if($this->checkType($file['type'])) {
                        $saveFile = $this->renamefile_moveFile($file);

                        if($saveFile) {
                            echo "<script>alert('lưu file thành công')</script>";
                        }else {
                            echo "<script>alert('lỗi khi lưu file')</script>";
                        }
                    }else {
                        echo "<script>alert('file có type không phù hợp')</script>";  
                    }
                }else {
                    echo "<script>alert('file vượt quá mức cho phép')</script>";  
                }
                
            }
        } 

        private function checkSize($size) {
            if($size > 2 * 1024 *1024) { //kích thước mà lớn hón 2MB
                return false;
            }else {
                return true;
            }
        }

        private function checkType($type) {
            $typeFile = array("image/png", "image/gif", "image/jpeg");

            if(in_array($type, $typeFile)) {
                return true;
            }else {
                return false;
            }
        }

        private function renamefile_moveFile($file) {
            $extension = pathinfo($file['name'])['extension']; //đuôi file
            $filename = pathinfo($file['name'])['filename']; //tên file
            $fileName_new = $filename.'_'.rand(1,100).'.'.$extension;
            $path = 'hinhanh/';
            $fullFile = $path.$fileName_new;

            if(move_uploaded_file($file['tmp_name'], $fullFile)) {
                return true;
            }else {
                return false;
            }
        }
    }
?>