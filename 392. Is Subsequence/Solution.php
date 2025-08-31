<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $pointer = 0;
        $n = strlen($t);
        $ns = strlen($s);

        if($ns > $n) return false;

        for($pointer2 = 0; $pointer2 < $n; $pointer2++){
            if($s[$pointer] == $t[$pointer2]){
                $pointer++;
            }
        }


        return $pointer >= $ns;
    }
}
?>