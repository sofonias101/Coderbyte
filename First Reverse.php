<?php

$str = "coderbyte";


function FirstReverse($str) {
    $reversed = null;
    $len = strlen($str);
    for($j = $len -1; $j >= 0; $j--) {
        echo $str[$j];
    }
    // code goes here
    return $reversed;

}
echo FirstReverse($str);


