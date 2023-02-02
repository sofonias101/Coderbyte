<?php
$strArr = array("1, 3, 9, 10, 17, 18", "1, 4, 9, 10");


function FindIntersection($strArr)
{
    // code goes here
    return $diff = implode(",",
        array_intersect(explode(", ", $strArr[0]),
            explode(", ", $strArr[1])
        )
    );

}

echo FindIntersection($strArr);


