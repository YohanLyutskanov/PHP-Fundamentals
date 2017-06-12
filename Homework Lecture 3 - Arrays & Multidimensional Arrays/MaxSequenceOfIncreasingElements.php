<?php
$numbers = trim(fgets(STDIN));
//$numbers = "3 2 3 4 2 2 4";

$array_numbers = explode(" ", $numbers);
$count = count($array_numbers);
$start = 0;
$bestStart = 0;
$len=1;
$maxLen=1;

for  ($i=1; $i<$count; $i++){
    if ($array_numbers[$i]==$array_numbers[$i-1]+1){
        $len++;
        $start = $i;
        if ($len>$maxLen){
            $maxLen=$len;
            $bestStart=$start;
        }
    } else {
        $len=1;
        $start=0;
    }
}

$final = [];
for ($j=0; $j<$maxLen; $j++){
$final[$j] = $array_numbers[$bestStart];
$bestStart --;
}

 $rev = array_reverse($final);

for ($k=0; $k<count($final); $k++){
    echo $rev[$k] . " ";
}
