<?php
$string = trim(fgets(STDIN));
$string = trim($string, '"');
$array = explode(" ", $string);
$sum = 0;

for ($j = 0; $j < count($array); $j++) {
    $numbers = str_split($array[$j]);
    $reverse = array_reverse($numbers);
    $var = implode("", $reverse);
    $int = (int)$var;

    $sum += $int;

}
echo $sum;