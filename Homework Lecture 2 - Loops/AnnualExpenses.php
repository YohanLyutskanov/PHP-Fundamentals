<html>
<form>
    Enter number of years:
    <input type="text" name="num">
    <input type="submit" name="show" value="Show Costs">
    <p>

        <?php if (isset($_GET["num"])): ?>
        <?php $year = $_GET["num"];
        $current = date("Y");
        $total = 0;
        ?>

    <table border="1">
        <td bgcolor="#7cfc00">Year</td>
        <td bgcolor="#7cfc00">January</td>
        <td bgcolor="#7cfc00">February</td>
        <td bgcolor="#7cfc00">March</td>
        <td bgcolor="#7cfc00">April</td>
        <td bgcolor="#7cfc00">May</td>
        <td bgcolor="#7cfc00">June</td>
        <td bgcolor="#7cfc00">July</td>
        <td bgcolor="#7cfc00">August</td>
        <td bgcolor="#7cfc00">September</td>
        <td bgcolor="#7cfc00">October</td>
        <td bgcolor="#7cfc00">November</td>
        <td bgcolor="#7cfc00">December</td>
        <td bgcolor="#7cfc00">Total</td>
        <?php for ($i = 0; $i < $year; $i++): ?>
            <tr>
                <td>
                    <?php echo $current;
                    $current--;
                    ?>
                </td>
                <?php for ($j = 0; $j < 12; $j++): ?>
                    <td>
                        <?php echo $sum = rand(0, 999);

                        $total = $total + $sum;
                        ?>
                    </td>
                <?php endfor; ?>

                <td>
                    <?php echo $total;
                    $total = 0;
                    ?>
                </td>
            </tr>
        <?php endfor; ?>

    </table>


    <?php endif; ?>
</form>
</html>