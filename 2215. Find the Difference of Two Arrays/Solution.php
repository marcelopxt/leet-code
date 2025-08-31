<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2) {
        $teste = array();
        $teste[0] = array_unique(array_diff($nums1, $nums2));
        $teste[1] = array_unique(array_diff($nums2, $nums1));
        return $teste;
    }
}
?>