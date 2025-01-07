<?php
    class ClassCal {
        public function ucln($a, $b) {
            if($b == 0) return $a;
            return $this->ucln($b, $a%$b);
        }

        public function bcnn($a, $b) {
            return ($a * $b) / $this->ucln($a, $b);
        }
    }
?>