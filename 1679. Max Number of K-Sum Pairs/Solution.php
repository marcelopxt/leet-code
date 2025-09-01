<?
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxOperations($nums, $k) {
        $n = sizeof($nums);
        sort($nums);
        $result = 0;
        $p1 = 0;
        $p2 = $n-1;

        while($p1 < $p2){
            if($nums[$p1] + $nums[$p2] == $k){
                $p1++;
                $p2--;
                $result++;
            }else if($nums[$p1] + $nums[$p2] < $k){
                $p1++;
            }else{
                $p2--;
            }
        }
        return $result;
    }
}

?>