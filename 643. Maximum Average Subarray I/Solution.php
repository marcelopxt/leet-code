<?
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        $r = $k-1;
        $l = 0;
        $n = count($nums);
        $media = 0;
        $max = 0;
        $sum = 0;
        $m = 0;

        if($k == $n){
            foreach($nums as $c){
                $sum += $c;
            }
            return $sum/$k;
        }else{
            for($i = 0; $i < $n; $i++){
                if($i < $k && $k != 1){
                    $m += $nums[$i];
                }else{
                    if($i == $k){
                        $media = $m / $k;
                        $max = $media;
                    }
                    $m += $nums[$i];
                    $m -= $nums[$i - $k];
                    $media = $m / $k;
                }
                    if($i == $k-1 && $k == $n) 
                        return $m / $k;
                    if($media > $max)
                        $max = $media;
            }
        }
            return $max;
    }
}
?>