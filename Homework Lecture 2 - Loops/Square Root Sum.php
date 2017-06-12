<html>
<form>

    <table border="1">
    <tr>
        <th>Number </th>
        <th>Square </th>
    </tr>
        <?php $sum = 0;?>
        <?php for ($i=0; $i<=100; $i+=2): ?>
<tr>
    <td><?php echo $i?></td>
    <td><?php echo round(sqrt($i),2)?></td>
    <?php
    $sum += sqrt($i);
    ?>
</tr>
        <?php endfor;?>
        <tr>
            <th>Total:</th>
            <th> <?php echo round($sum,2) ?></th>
        </tr>

    </table>
</form>
</html>