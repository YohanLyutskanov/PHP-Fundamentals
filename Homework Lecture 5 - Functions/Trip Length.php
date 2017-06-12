<?php
list($x1, $y1, $x2, $y2, $x3, $y3) = array_map("floatval", explode(", ", trim(fgets(STDIN))));

function calculateDistance(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
{
    $AB = sqrt(($x1 - $x2) * ($x1 - $x2) + ($y1 - $y2) * ($y1 - $y2));
    $BC = sqrt(($x2 - $x3) * ($x2 - $x3) + ($y2 - $y3) * ($y2 - $y3));
    $AC = sqrt(($x1 - $x3) * ($x1 - $x3) + ($y1 - $y3) * ($y1 - $y3));
    $max = max($AB, $BC, $AC);

    $print = "";
    if ($AC === $max) {
        $print = '1->2->3: ' . ($AB + $BC);
    } else if ($BC === $max) {
        $print = '2->1->3: ' . ($AB + $AC);

    } else if ($AB === $max) {
        $print = '1->3->2: ' . ($BC + $AC);
    }
    return $print;
}

echo calculateDistance($x1, $y1, $x2, $y2, $x3, $y3);