<?php
$number = trim(fgets(STDIN));
$operations = trim(fgets(STDIN));

$operations = explode(", ", $operations);

function cook($num, $operation)
{
    switch ($operation) {
        case 'chop':
            return $num / 2;
        case 'dice':
            return sqrt($num);
        case 'spice':
            return ++$num;
        case 'bake':
            return $num * 3;
        case 'fillet':
            return 0.8 * $num;

    }
    return $num;
}

foreach ($operations as $operation) {
    $number = cook($number, $operation);
    echo $number . "\n";
}