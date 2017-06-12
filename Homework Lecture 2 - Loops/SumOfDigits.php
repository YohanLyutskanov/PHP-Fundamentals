<html>
<form>
    Input String:
    <input type="text" name="input">
    <input type="submit" name="button">
    <?php if (isset($_GET["input"])): ?>
        <?php $str = $_GET["input"];
        $arr = explode(", ", $str);
        ?>
        <p>
        <table border="1">
            <?php for ($i = 0; $i < count($arr); $i++): ?>
                <tr>
                    <td>
                        <?php echo $arr[$i]; ?>
                    </td>
                    <td>
                        <?php
                        $sum = 0;
                        // $check = intval(10, $arr[$i]);
                        if ($arr[$i] = (int)$arr[$i]) {

                            do {
                                $sum = $sum + $arr[$i] % 10;
                            } while ($arr[$i] = (int)$arr[$i] / 10);
                            echo $sum;
                        } else {
                            echo "I cannot sum that ";
                        }
                        ?>
                    </td>
                </tr>
            <?php endfor; ?>
        </table>


    <?php endif; ?>
</form>
</html>