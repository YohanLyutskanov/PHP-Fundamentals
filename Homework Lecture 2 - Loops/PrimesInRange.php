<html>
<form>
    Starting Index:
    <input type="text" name="start">
    End:
    <input type="text" name="end">
    <input type="submit" name="submit" value="Submit">
    <p>

        <?php if (isset($_GET['start'])): ?>
            <?php
            $start = $_GET['start'];
            $end = $_GET['end'];

            for ($i = $start; $i <= $end; $i++) {

                $counter = 0;
                for ($j = 1; $j <= $i; $j++) {


                    if ($i % $j == 0) {

                        $counter++;
                    }
                }

                if ($counter == 2) {

                    echo "<strong>" . $i . "  " . "</strong>";
                } else {
                    echo $i . "  ";
                }
            }

            ?>

        <?php endif; ?>

</form>

</html>