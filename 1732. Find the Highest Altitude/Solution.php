<?

class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $prefixArr = [];
        $bigger = 0;
        $n = count($gain);
        $currentSum = 0;
        $prefixArr[] = 0;

        for($i = 0; $i <= $n; $i++){
            $currentSum += $gain[$i];
            $prefixArr[] = $currentSum;
            // echo 'i='.$i."       gain[{$i}] = ".$gain[$i]. "   prefixArr[{$i}]=".$prefixArr[$i]."\n";
        }

        foreach($prefixArr as $p){
            if($p > $bigger){
                $bigger = $p;
            }
        }

        return $bigger;
    }
}

?>