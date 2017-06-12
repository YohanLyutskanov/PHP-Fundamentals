<?php
$num = 210;
$hundred =102;


$var0 = $hundred/100;
$var1 = (int)$var0;//purvo chislo
$var2 = $hundred%100;
$var6 = $var2/10;
$var3 = (int)$var6;//vtoro chislo
$var4 = $var2%10; // treto chislo
//echo $var1 . " ".$var3. " ".$var4;


if ($num<100){
    echo "no";
}
else if ($num>=100 && $num<1000 ) {
    do {
        $var0 = $hundred/100;
        $var1 = (int)$var0;//purvo chislo
        $var2 = $hundred%100;
        $var6 = $var2/10;
        $var3 = (int)$var6;//vtoro chislo
        $var4 = $var2%10; // treto chislo
        if ($var1 != $var3 && $var1 != $var4 && $var3 != $var4) {
            echo $hundred . " ";

        }
        $hundred++;
    } while ($hundred <= $num);

}
else {
    do {
        $var0 = $hundred/100;
        $var1 = (int)$var0;//purvo chislo
        $var2 = $hundred%100;
        $var6 = $var2/10;
        $var3 = (int)$var6;//vtoro chislo
        $var4 = $var2%10; // treto chislo
        if ($var1 != $var3 && $var1 != $var4 && $var3 != $var4) {
            echo $hundred . " ";

        }
        $hundred++;
    } while ($hundred < 1000);
}