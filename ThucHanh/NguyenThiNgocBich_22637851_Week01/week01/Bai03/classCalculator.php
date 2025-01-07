<?php
    class ClassCalculator {
        public function addition($a, $b) {
            return $a+$b;
        }

        public function subtraction($a, $b) {
            return $a-$b;
        }

        public function multiplication($a, $b) {
            return $a*$b;
        }

        public function division($a, $b) {
            if($b == 0) {
                return false;
            }
            return $a/$b;
        }

        public function mod($a, $b) {
            if($b == 0) {
                return false;
            }
            return $a%$b;
        }
    }
?>