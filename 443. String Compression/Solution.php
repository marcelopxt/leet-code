<?php class Solution {

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress(&$chars) {
        $count = 0;
        $l = $chars[0];
        $s = [];
        $n = sizeof($chars);

        if($n == 1){
            $s[] = $l;
        }else{
            foreach($chars as $c){
                if($l !== $c){
                    $s[] = $l;
                    if($count > 1){
                        $countString = $count . "";
                        if($count > 9){
                            $countString = str_split($countString);
                             foreach($countString as $st){
                                $s[] = $st;
                            }
                        }else{
                            $s[] = $countString;
                        }
                    }

                    $count = 1;
                    $l = $c;
                }else{
                    $count++;
                }
            }
        }
        $ns = sizeof($s);
        $countString = $count . "";
        if($l != $s[$ns-1] || $count == 1){
            $s[] = $l;
            if($count > 1){
                if($count > 9){
                    $countString = str_split($countString);
                    foreach($countString as $st){
                        $s[] = $st;
                    }
                }else{
                    $s[] = $countString;
                }
            }
        }

        $chars = $s;
        return sizeof($chars);
    }
     
}

?>