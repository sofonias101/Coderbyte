<?php

/* Find Intersection

Have the function FindIntersection(strArr) read the array of strings stored in strArr which will contain 2 elements:
the first element will represent a list of comma-separated numbers sorted in ascending order,
the second element will represent a second list of comma-separated numbers (also sorted).
Your goal is to return a comma-separated string containing the numbers that occur in elements of strArr in sorted order.
If there is no intersection, return the string false.*/


$strArr = array("1, 2, 3, 4, 5", "6, 7, 8, 9, 10");


function FindIntersection($strArr)
{
    // code goes here
    if (implode(",",
        array_intersect(explode(", ", $strArr[0]),
            explode(", ", $strArr[1])
        )
    )) {
       return implode(",",
            array_intersect(explode(", ", $strArr[0]),
                explode(", ", $strArr[1])
            )
        );
} else {
        echo "false";
    }

}

echo FindIntersection($strArr);


