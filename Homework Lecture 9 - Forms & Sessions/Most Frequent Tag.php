<?php session_start();
if (!isset($_SESSION['tagsCount'])) {
    $_SESSION['tagsCount'] = [];
}
?>
    <form name="form">
        <lable for="input">
            Enter Tags:<br>
            <input type="text" id="input" name="input">
            <input type="submit" name="action" value="Submit">
            <a href="Most%20Frequent%20Tag.php?clear=true"><input type="button" name="action" value="Clear"></a>
        </lable>
        <!-- <div class="result"></div>-->
    </form>
<?php
if (isset($_GET['input'])) {
    $input = $_GET['input'];
    $input = explode(", ", $input);

    foreach ($input as $tag) {
        if (array_key_exists($tag, $_SESSION['tagsCount'])) {
            $_SESSION['tagsCount'][$tag]++;
        } else {
            $_SESSION['tagsCount'][$tag] = 1;
        }
    }
    arsort($_SESSION['tagsCount']);
    echo "<ul>";
    foreach ($_SESSION['tagsCount'] as $key => $value) {
        echo "<li>" . $key . ": " . $value . " times" . " </li>";
    }
    echo "</ul><br>";
    echo "The most frequent tag is: " . array_search(max($_SESSION['tagsCount']), $_SESSION['tagsCount']);
}else{
    $_SESSION['tagsCount'] = [];
}
