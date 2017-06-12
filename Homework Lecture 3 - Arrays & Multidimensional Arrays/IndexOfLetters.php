<?php
$string = fgets(STDIN);
$string = trim($string);
$string = strtolower($string);
$array = str_split($string);

$alphabet = range('a', 'z');

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " -> " . array_search($array[$i], $alphabet);
    echo "\n";
    /* if ($i == count($array)-1){
         echo $array[$i] . " -> " . array_search($array[$i], $alphabet);
     }*/
}
//echo $array[count($array)-1]. " -> " . array_search($array[], $alphabet);