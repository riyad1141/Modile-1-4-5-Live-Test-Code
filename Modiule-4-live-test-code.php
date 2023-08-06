<?php

function LiveTest ($str) {
    $str = trim($str);

    $words = explode(" ",$str);

    $maxLength = 0;
    $longestWord = '';

    foreach ($words as $word){
        $length = strlen($word);

        if ($length > $maxLength){
            $longestWord =$word;
            $maxLength = $length;
        }
    }
    return $longestWord;
}


$str = "The quick brown fox jumped over the lazy dog";

echo LiveTest($str);


