<?php
class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        $count = 0;
        for($i = 0; $i < sizeof($flowerbed); $i++){
            if($i==0){
                if($flowerbed[$i+1] == 0 && $flowerbed[$i] == 0){
                    $flowerbed[$i] = 1;
                    $count++;
                }
            }else if( $i==sizeof($flowerbed) && $flowerbed[$i-1] == 0 && $flowerbed[$i] == 0){
                $flowerbed[$i] = 1;
                $count++;
            }else if($flowerbed[$i-1] == 0 && $flowerbed[$i+1] == 0 && $flowerbed[$i] == 0){
                $flowerbed[$i] = 1;
                $count++;
            }
        }

        return $count >= $n;
    }
}

?>