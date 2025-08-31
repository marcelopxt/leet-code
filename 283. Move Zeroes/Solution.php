<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $n = sizeof($nums);
        $left = 0;
        for($i = 0; $i < $n; $i++){
            if($nums[$i] != 0){
                $aux = $nums[$i];
                $nums[$i] = $nums[$left];
                $nums[$left] = $aux;
                $left++;
            }
        }
        return null;
    }
}
?>