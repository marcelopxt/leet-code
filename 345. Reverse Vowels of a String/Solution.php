<?php
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s)
    {
        $pos = [];
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        for ($i = 0; $i < strlen($s); $i++) {
            $current = $s[$i];
            if (in_array($current, $vowels)) {
                $pos[] = $current;
            }
        }

        $revertedArr = array_reverse($pos);
        $count = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $current = $s[$i];
            if (in_array($current, $vowels)) {
                $s[$i] = $revertedArr[$count];
                $count++;
            }
        }

        return $s;
    }
}
?>