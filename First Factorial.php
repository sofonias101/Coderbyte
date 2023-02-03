<?php

/* First Factorial

Have the function FirstFactorial(num) take the num parameter being passed and return the factorial of it.
For example: if num = 4, then your program should return (4 * 3 * 2 * 1) = 24.
For the test cases, the range will be between 1 and 18 and the input will always be an integer.*/


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