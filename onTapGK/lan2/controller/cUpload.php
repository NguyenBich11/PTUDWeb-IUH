<?php 
    class cUpload {
        public function xuLy($files) {
            foreach($files['name'] as $key=>$value) {
                $file = [
                    'name'=> $files['name'][$key],
                    'size'=> $files['size'][$key],
                    'type'=> $files['type'][$key],
                    'tmp_name'=> $files['tmp_name'][$key]
                ];

                if($this->checkSize($file['size'])) {
                    if($this->checkType($file['type'])) {
                        $saveFile = $this->rename_movefile($file);

                        if($saveFile) {
                            echo "<script>alert('Lưu file thành công')</script>";
                        }else {
                            echo "<script>alert('Lưu phải không thành công')</script>";
                        }
                    }else {
                        echo "<script>alert('type phải nằm trong png, gif, jpge')</script>";
                    }
                }else {
                    echo "<script>alert('size ảnh phải nhỏ hơn 2mb')</script>";
                }
            }
        }

        private function checkSize($size) {
            if($size > 2 * 1024 *1024) {
                return false;
            }else {
                return true;
            }
        }

        private function checkType($type) {
            $types = array("image/jpeg", "image/gif", "image/png");

            if(in_array($type, $types)) {
                return true;
            }else {
                return false;
            }
        }

        private function rename_movefile($file) {
            $extension = pathinfo($file['name'])['extension'];
            $fileName = pathinfo($file['name'])['filename'];
            $fileName_new = $fileName.'_'.rand(1,10).'.'.$extension;

            $path = 'hinhanh/';
            $full = $path.$fileName_new;

            if(move_uploaded_file($file['tmp_name'], $full)){
                return true;
            }else {
                return false;
            }
        }
    }
?>