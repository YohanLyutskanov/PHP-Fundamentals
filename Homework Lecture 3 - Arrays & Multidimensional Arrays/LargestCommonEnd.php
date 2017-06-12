<?php
$string1 = fgets(STDIN);
$string1 = trim($string1);
$string2 = fgets(STDIN);
$string2 = trim($string2);

$arr1 = explode(" ", $string1);
$arr2 = explode(" ", $string2);

$length1 = count($arr1);
$length2 = count($arr2);

$counter1 = 0;
$counter2 = 0;

$length = min($length1, $length2);

for ($i = 0; $i < $length; $i++) {
    if ($arr1[$i] == $arr2[$i]) {
        $counter1++;
    } else {
        break;
    }
}

for ($j = $length - 1; $j >= 0; $j--) {
    if ($arr1[$length1 - 1] == $arr2[$length2 - 1]) {
        $length1--;
        $length2--;
        $counter2++;
    } else {
        break;
    }
}

echo max($counter1, $counter2);
