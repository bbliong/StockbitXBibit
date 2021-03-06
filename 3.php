<?php

echo findFirstStringInBracket("Apakah ini akan diambil ? (Jawab)") . PHP_EOL;

function findFirstStringInBracket($str)
{
    $result = "";
    $obracket = strpos($str, "(");
    $cBracket = strpos($str, ")");

    if ( $obracket > 0 && $cBracket > 0 &&  $obracket < $cBracket) {
        $result =  substr($str, ++$obracket, $cBracket - $obracket);
    }

    return $result;
}
?>