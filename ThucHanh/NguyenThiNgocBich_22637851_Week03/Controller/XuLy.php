<?php 
    class XuLy {
        public function upload($files) {
            foreach($files['name'] as $key=>$value){
                $file = [
                    'name' => $files['name'][$key],
                    'size' => $files['size'][$key],
                    'type' => $files['type'][$key],
                    'tmp_name' => $files['tmp_name'][$key]
                ];

                if($this->checkSize($file['size'])) {
                    if($this->checkType($file['type'])) {
                        $saveFile = $this->renameFile_movefile($file);
                       
                        if($saveFile){
                            echo "<div class='items'>
                                    <span>Tên file ban đầu: ".$saveFile['file name first'].".".$saveFile['extension']."</span> <br>
                                    <span>Tên file thay đổi: ".$saveFile['New fileName']."</span> <br>
                                    <span>Kích thước: ".round($file['size']/1024, 2)."KB</span> <br>
                                    <span>Loại file: ".$file['type']."</span> <br>
                                    <span>Tên file tạm: ".$file['tmp_name']."</span> <br>
                                    <img src='".$saveFile['fullPath']."' width='auto' height='300'>
                                </div>";
                        }else {
                            echo "Lỗi khi lưu file";
                        }
                    }else {
                        echo "Type file phải đúng định dạng";
                    }
                }else {
                    echo "Kích thước file vượt quá giới hạn cho phép";
                }
            }
        }

        private function checkSize($size) {
            if ($size > 2 * 1024 * 1024) {
                return false;
            }else {
               return true;
            }
        }

        private function checkType($type) {
            $typeFile = array("image/png", "image/jpeg", "image/gif");

            if(in_array($type, $typeFile)) {
                return true;
            }else {
                return false;
            }
        }

        private function renameFile_movefile($filename) {
            $extension = pathinfo($filename['name'])['extension'];
            $fileName = pathinfo($filename['name'])['filename'];
            $fileName_new =$fileName.'_'.rand(100, 999).'.'.$extension;

            $path = 'hinhanh/';
            $fullFilename = $path.$fileName_new;

            if(move_uploaded_file($filename['tmp_name'], $fullFilename)) {
                return ['file name first'=> $fileName, 'fullPath'=>  $fullFilename, 'New fileName'=> $fileName_new, 'extension'=> $extension];
            }else {
                return false;
            }
        }

        public function deleteFile() {
            $path = "hinhanh/";
            $files = glob($path . "*"); //hàm glob tìm kiếm tất cả các đường dẫn phù hợp với path

            if($files) {
                foreach($files as $file) {
                    $fileName = basename($file);
                    echo "<label><input type='checkbox' name='deleteFiles[]' value='$file'>$fileName</label><br>";
                }
            }else {
                echo "Không có file ảnh nào";
            }
        }
    }
?>