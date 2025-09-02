<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $n = count($nums);

        for($i = 0; $i < $n; $i++){
            if($i==0){
                $right[] = 1;
                $left[] = 1;
            }else{
                $right[$i] = $right[$i-1] * $nums[$i-1];     
                $left[$i] = $left[$i-1] * $nums[($n-1) - ($i-1)];
            }
        }

        for($i=0; $i < $n; $i++)
            $answer[$i] = $right[$i] * $left[($n-1) - $i];

        return $answer;
    }
}
?>