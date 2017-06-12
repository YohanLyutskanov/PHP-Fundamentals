<form>
    Enter tags: <br>
    <input type="text" name="input">
    <input type="submit" name="submit" value="Submit">

</form>
<?php
if (isset($_GET['input']) && isset($_GET['submit'])):
    $input = $_GET['input'];
    $input = explode(", ", $input);
    ?>

    <ol start="0">

        <?php foreach ($input as $value): ?>
            <li>  <?= "$value"; ?></li>

        <?php endforeach; ?>
    </ol>

<?php endif; ?>