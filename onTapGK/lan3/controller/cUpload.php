<?php 
    class cUpload{
        public function cXuLy($files) {
            foreach($files['name'] as $key=>$value) {
                $file = [
                    'name'=> $files['name'][$key],
                    'size'=> $files['size'][$key],
                    'type'=> $files['type'][$key],
                    'tmp_name'=> $files['tmp_name'][$key]
                ];

                if($this->checkSize($file['size'])) {
                    if($this->checkType($file['type'])) {
                        $saveFile = $this->rename_removeFile($file);

                        if($saveFile) {
                            echo "<script>alert('up file thành công')</script>";
                        }else {
                            echo "<script>alert('up file không thành công')</script>";
                        }
                    }else {
                        echo "<script>alert('ảnh không nằm trong định dạng')</script>";
                    }
                }else {
                    echo "<script>alert('ảnh vượt quá kích thước')</script>";
                }
            }
        }

        public function deleteFile($files = null, $folder) {
            if($files === null) {
                $allFiles = glob($folder."*");

                foreach($allFiles as $file) {
                    if(is_file($file)) {
                        unlink($file);
                    }
                    echo "Xóa file thành công";
                }
            }else {
                foreach($files as $file) {
                    $path = $folder.$file;

                    if(is_file($path)) {
                        unlink($path);
                    }
                    echo "Xóa file thành công";
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
            $types = array("image/png", "image/jpeg", "image/gif");

            if(in_array($type, $types)) {
                return true;
            }else {
                return false;
            }
        }

        private function rename_removeFile($files) {
            $extension = pathinfo($files['name'])['extension'];
            $filename = pathinfo($files['name'])['filename'];
            $new_path = $filename.'_'.rand(1,10).'.'.$extension;
            $path = 'hinhanh/';
            $fullPath = $path.$new_path;

            if(move_uploaded_file($files['tmp_name'], $fullPath)) {
                return true;
            }else {
                return false;
            }
        }
    }
?>