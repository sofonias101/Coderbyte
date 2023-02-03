<?php

/* Longest Word

Have the function LongestWord(sen) take the sen parameter being passed and return the longest word in the string.
If there are two or more words that are the same length, return the first word from the string with that length.
Ignore punctuation and assume sen will not be empty. Words may also contain numbers, for example "Hello world123 567"*/


$words = "fun&!! time";

function LongestWord($sen): string
{

    $strA = explode(" ", preg_replace('/[^a-zA-Z0-9_ -]/', ' ', $sen));
    $result = null;
    $long = null;

    for ($i = 0; $i < count($strA); $i++) {


        if ($result < strlen($strA[$i])) {
            $long = $strA[$i];
            $result = strlen($strA[$i]);
        }

    }
    return $long;


}

// keep this function call here
echo LongestWord($words);
