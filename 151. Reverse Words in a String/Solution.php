<?php
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $s = trim($s);
        $space = " ";
        $endWord = false;
        $word = "";

        for ($i = 0; $i < strlen($s); $i++) {
            $current = $s[$i];

            if ($current === $space) {
                if ($endWord) {
                    $arr[] = $word;
                    $arr[] = $current;
                    $word = "";
                }
                $endWord = false;
            } else {
                if (!$endWord) {
                    $word .= $current;
                    $endWord = true;
                } else {
                    $word .= $current;
                }
            }
        }


        $arr[] = $word;
        $result = implode("", array_reverse($arr));
        return $result;
    }

}
?>