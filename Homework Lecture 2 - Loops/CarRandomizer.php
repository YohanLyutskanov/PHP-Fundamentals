<html>
<form>
         Enter cars:
        <input type="text" name="cars">
        <input type="submit" name="show" value="Show result">
    <p>
    <?php if(isset($_GET["cars"])):?>
    <?php $arr = $_GET["cars"]; ?>

    <table border="1">
        <th>Car</th>
        <th>Color</th>
        <th>Count</th>

        <?php
        $words = explode(", ", $arr);

        for ($i=0; $i<count($words); $i++): ?>
        <tr>
            <td> <?php echo $words[$i]; ?> </td>

            <td> <?php
                $colors = array("Green", "Blue", "Red", "Yellow", "Black");
                $randColor = array_rand($colors, 1);
                echo $colors[$randColor]
                ?> </td>

            <td> <?php  echo rand(1, 5); ?> </td>
        </tr>
        <?php endfor;?>
    </table>
    <?php endif; ?>
</form>
</html>