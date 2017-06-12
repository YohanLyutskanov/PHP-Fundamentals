<?php
$nums = array_map('trim', explode(' ', fgets(STDIN)));
$count = count($nums);
$sumNum = 0;
$sumLeft = 0;
$is_found = false;
$found = 0;
if ($count == 1) {
    echo 0;
} else {
    for ($i = 0; $i < $count; $i++) {
        $sumNum += $nums[$i];
        $sumLeft = 0;
        for ($j = $count - 1; $j > $i + 1; $j--) {
            $sumLeft += $nums[$j];
            if ($sumNum == $sumLeft) {
                $found = $i + 1;
                $is_found = true;
            }
        }
    }
    if ($is_found == false) {
        echo 'no';
    } else {
        echo $found;
    }
}