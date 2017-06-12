<html>
<form method="get">
    <input type="text" name="input">
    <input type="submit" name="submit" value="Color text">
    <br>


    <?php    if (isset($_GET['input'])){
//$text = fgets('STDIN');
        $text = $_GET['input'];

        $count = strlen($text);

        for ($i=0; $i<$count; $i++ ){
            if (ord($text[$i]) % 2 == 0){
                $color = 'red';
            }else {
                $color = 'blue';
            }
            //echo  " <span style='color:$color'>$text[$i]</span>" ;
            echo  "<font color='$color'>$text[$i] </font>" ;
        }

    }
      ?>
</form>
</html>