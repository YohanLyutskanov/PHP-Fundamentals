<form method="get">
    <table>
        <td>
            First Name:<br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="text" name="firstName[]" placeholder="First Name"><br>
            <input type="submit">
        </td>
    </table>
</form>
<?php
$names = $_GET['firstName'];
$count = 1;
foreach ($names as $name) { ?>
    <table border="1">
        <td><?= $name;
            $count++; ?></td>
    </table>
    <?php
}
$pages = ceil($count/3);
for ($i = 1; $i <= $pages; $i++) {
    echo "<a href='test.php?page=" . $i . "'";
    //if ($i == $page) echo " class='curPage'";
    echo ">" . $i . "</a> ";
}