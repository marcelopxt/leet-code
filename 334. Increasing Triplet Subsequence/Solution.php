<?
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function increasingTriplet($nums) {
        $first = PHP_INT_MAX;
        $second = PHP_INT_MAX;
        
        foreach($nums as $num){
            if($num <= $first)
                $first = $num;
            else if($num <= $second)
                $second = $num;
            else
                return true;
        }

        return false;
    }
}
?>