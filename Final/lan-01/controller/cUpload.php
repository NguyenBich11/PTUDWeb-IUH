<?php 
    class cUpload {
        public function cUploadImage($file) {
            $pathImg = 'image/';

            $masv = '22637851';
            $timestamp = time();
            $imgFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

            $newFileName = $masv.'-'.$timestamp.'.'.$imgFileType;

            $targetFile = $pathImg.$newFileName;

            if(move_uploaded_file($file['tmp_name'], $targetFile)) {
                return $targetFile;
            }

            return false;
        }
    }
?>