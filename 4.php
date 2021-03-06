<?php

$array= ['kita', 'atik', 'tika', 'aku', 'kia', 'makan', 'kua'];

print_r(getAnagramDatas($array));

function getAnagramDatas($array)
{       
    $result= [];

    foreach ($array as $key => $value) {

        $arrayOfValue = str_split($value);

        sort($arrayOfValue);

        $index = implode("", $arrayOfValue);

        if(isset($result[$index])){
            array_push($result[$index], $value);
        }else{
            $result[$index][] = $value;
        }
    }

    return array_values($result);
}

?>