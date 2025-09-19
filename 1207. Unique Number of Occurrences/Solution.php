<?php
class Solution {
    
    function uniqueOccurrences($arr) {
        $uniqueValues = array_unique($arr);
        $countArr = array();
        foreach ($uniqueValues as $atual) {
            $count = 0;
            for ($j = 0; $j < sizeof($arr); $j++) {
                if ($arr[$j] === $atual) {
                    $count++;
                }
            }
            $countArr[] = $count;
        }

        $totalCount = count($countArr);
        $uniqueCount = count(array_unique($countArr));

        return $totalCount == $uniqueCount;
    }
}
?>
