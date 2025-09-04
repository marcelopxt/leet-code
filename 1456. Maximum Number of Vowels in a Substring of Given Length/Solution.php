<?
class Solution
{

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function maxVowels($s, $k)
    {
        $arr = str_split($s);
        $arrV = ['a', 'e', 'i', 'o', 'u'];
        $n = count($arr);
        $count = 0;
        $l = 0;
        $r = $k - 1;

        for ($i = 0; $i < $k; $i++) {
            if (in_array($arr[$i], $arrV))
                $count++;
        }

        $max = $count;

        if ($k == $n)
            return $max;

        while ($r < $n) {
            $l++;
            $r++;
            if ($count >= $k)
                $count = 0;
            if (in_array($arr[$r], $arrV))
                $count++;
            if ($l > 0 && in_array($arr[$l - 1], $arrV))
                $count--;
            if ($count > $max)
                $max = $count;
        }
        return $max;
    }
}
?>