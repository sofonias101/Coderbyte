<?php

$int = 10;
function FirstFactorial($num)
{
    $final = null;
    for ($i = $num; $i > 0; $i--) {

        if ($i >= $num) {
            $final = $num;
        } elseif ($i < $num) {
            $final = $final * $i;
        }
    }
    // code goes here
    return $final ;

}


echo FirstFactorial($int);
echo "<br>";