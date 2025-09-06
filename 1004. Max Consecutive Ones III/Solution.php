<?
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function longestOnes($nums, $k) {
        $zeroCount = 0;
        $left = 0;
        $n = count($nums);
        $max = 0;
        for ($right = 0; $right < $n; $right++) { 
            if($nums[$right] == 0)
                $zeroCount++;
            while($zeroCount > $k){
                if($nums[$left] == 0)
                    $zeroCount--;
                $left++;
            }
            $count = $right - $left + 1;
            if($count > $max) $max = $count;
        }
        return $max;
    }
}
?>