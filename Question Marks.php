<?php
/*Questions Marks
HIDE QUESTION
Have the function QuestionsMarks(str) take the str string parameter, which will contain single digit numbers, letters, and question marks,
and check if there are exactly 3 question marks between every pair of two numbers that add up to 10.
If so, then your program should return the string true, otherwise it should return the string false.
If there aren't any two numbers that add up to 10 in the string, then your program should return false as well.

For example: if str is "arrb6???4xxbl5???eee5" then your program should return true because there are exactly 3 question marks between 6 and 4,
and 3 question marks between 5 and 5 at the end of the string.*/

$string = "aa6?9";


function QuestionsMarks($str)
{
    $str = preg_replace('/[^?0-9]/', '', $str);
    $justNum = preg_replace('/[^0-9]/', "", $str);

    $ten = 10;
    $tenCounter = null;
    $equal = null;
    $match = null;

    //This loops through the filtered string that cointains only numbers and check how many of the
    //numbers add up to 10.
    for ($j = 0; $j < strlen($justNum) - 1; $j++) {

        if (((intval($justNum[$j]) + intval($justNum[$j + 1])) == $ten)) {
            echo intval($justNum[$j]) . intval($justNum[$j + 1]) . "<br>";
            $tenCounter++;
        }
    }

    if ($tenCounter) {
        for ($i = 0; $i < strlen($str) - 4; $i++) {

            if (((intval($str[$i]) + intval($str[$i + 4])) == $ten)) {
                $equal++;

                if (($str[$i + 1] === '?') && ($str[$i + 1] === $str[$i + 2] && $str[$i + 3])) {
                    $match += 1;
                }
            }
        }

    } else {
        return "false";
    }

    if ($tenCounter <= $match) {
        return "true";
    } else {
        return "false";
    }


}

echo QuestionsMarks($string);


