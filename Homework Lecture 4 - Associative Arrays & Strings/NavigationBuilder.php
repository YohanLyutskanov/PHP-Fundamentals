<html>
<form>
    Categories:
    <input type="text" name="categories"> <br>
    Tags:
    <input type="text" name="tags"> <br>
    Months:
    <input type="text" name="months"> <br> <br>

    <input type="submit" name="submit" value="Generate"> <br>
</form>
</html>
<?php
if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])) {


    $a = $_GET['categories'];
    $b = $_GET['tags'];
    $c = $_GET['months'];

    $categories = explode(", ", $a);
    $tags = explode(", ", $b);
    $months = explode(", ", $c);

    $length_cat = count($categories);
    $length_tag = count($tags);
    $length_mon = count($months);


    echo "<h2>Categories</h2>";
    echo "<ul>";

    for ($i = 0; $i < $length_cat; $i++) {
        echo "<li>$categories[$i]</li>";
    }

    echo "</ul>";


    echo "<h2>Tags</h2>";
    echo "<ul>";

    for ($i = 0; $i < $length_tag; $i++) {
        echo "<li>$tags[$i]</li>";
    }

    echo "</ul>";


    echo "<h2>Months</h2>";
    echo "<ul>";

    for ($i = 0; $i < $length_mon; $i++) {
        echo "<li>$months[$i]</li>";
    }

    echo "</ul>";

}
