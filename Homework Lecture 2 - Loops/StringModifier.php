<html>
<form>
    <input type="text" name="enter">
    <input type="radio" name="button" value="palindrome">Check Palindrome
    <input type="radio" name="button" value="reverse">Reverse String
    <input type="radio" name="button" value="split">Split
    <input type="radio" name="button" value="hash">Hash String
    <input type="radio" name="button" value="shuffle">Shuffle String
    <input type="submit" name="submit" value="Submit">
</form>
<?php if (isset($_GET["enter"])): ?>
    <?php
    $word = $_GET["enter"];
    $choice = $_GET["button"];


    switch ($choice) {
        case 'palindrome':
            $pal = strrev($word);
            if ($pal === $word) {
                echo $word . " is a palindrome!";
            } else {
                echo $word . " is not a palindrome!";
            }
            break;
        case 'reverse':
            echo strrev($word);
            break;
        case 'split':
            $split = str_split($word);
            for ($i = 0; $i < count($split); $i++) {
                echo $split[$i] . " ";
            }
            break;
        case 'hash':
            echo crypt($word, 'salt');
            break;
        case 'shuffle':
            echo str_shuffle($word);
            break;
    }


    ?>


<?php endif; ?>


</html>