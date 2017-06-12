<html>
<form>
    <input type="text" name="input">
    <input type="submit" name="submit" value="Count Words">
    <p>

        <?php
        /*

         if (isset($_GET['input'])) {


            $string = $_GET['input'];
            $string = strtolower($string);
            preg_match_all("/([A-Za-z])\w+/", $string, $matches);

            $matches = $matches[0];
            $final = [];
            for ($i = 0; $i < count($matches); $i++) {
                if (array_key_exists($matches[$i], $final)) {
                    $final[$matches[$i]] += 1;
                } else {
                    $final[$matches[$i]] = 1;
                }
            }


            echo "<table border='2'>";

            foreach ($final as $key => $value) {

                echo "<tr>";
                echo "<td>";
                echo $key;
                echo "</td>";
                echo "<td>";
                echo $value;
                echo "</td>";
                echo "</tr>";
            }


            echo "</table>";

        }
        */
        if (isset($_GET['input'])) {
            $input = $_GET["input"];
            $stringInput = strtolower($input);
            $arrOnlyWords = (str_word_count($stringInput, 1));//returns an array containing all the words found inside the string
            $resultArr = [];


            foreach ($arrOnlyWords as $key => $value) {
                if (array_key_exists($value, $resultArr)) {
                    $resultArr[$value]+=1;
                } else {
                    $resultArr[$value] = 1;
                }

            }


            echo "<table border='2'>";
            foreach ($resultArr as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo "</table>";

        }
        ?>


</form>
</html>