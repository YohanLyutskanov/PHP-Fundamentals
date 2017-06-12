<?php
$string = fgets(STDIN);
$string = trim($string);
//$string = "8 2.5 2.5 8 2.5";
$numbers = explode(" ", $string);
$count = count($numbers);
$final = [];
for ($i = 0; $i < $count; $i++) {
    if (array_key_exists($numbers[$i], $final)) {
        $final[$numbers[$i]] += 1;
    } else {
        $final[$numbers[$i]] = 1;
    }
}

ksort($final);

foreach ($final as $key => $value) {
    echo $key . " -> " . $value . " times" . "\n";
}

