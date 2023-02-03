<?php
/* First Reverse

Have the function FirstReverse(str) take the str parameter being passed and return the string in reversed order.
For example: if the input string is "Hello World and Coders" then your program should return the string sredoC dna dlroW olleH.*/


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


