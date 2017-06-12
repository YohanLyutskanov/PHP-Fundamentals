<?php

$line = fgets(STDIN);
$line = trim($line);
$nums = explode(" ", $line);
$nums = array_map("intval", $nums);

$maxArr = [];
$currentArr = [];
$count = count($nums);
for ($i = 0; $i < $count - 1; $i++) {

    if ($nums[$i] == $nums[$i + 1]) {
        $currentArr[] = $nums[$i + 1];
        if ($i + 1 == $count - 1) {
            $currentArr[] = $nums[$i + 1];
        }
    } else {
        $currentArr[] = $nums[$i];
        if (count($currentArr) > count($maxArr)) {
            $maxArr = $currentArr;
        }
        $currentArr = [];
    }
}
unset($count);
$max = count($maxArr) >= count($currentArr) ? $maxArr : $currentArr;

echo implode(" ", $max);