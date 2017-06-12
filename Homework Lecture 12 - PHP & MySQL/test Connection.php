<form>
    <input type="text" name="class">
    <input type="submit" name="submit">
</form>

<?php
if (isset($_GET['class'])) {
    $db = new PDO ('mysql:host=localhost;dbname=school;charset=utf8', "root", "");
    $name = $_GET['class'];

    $sql = "select * from classes where name = ?";
    $statement = $db->prepare($sql);


    if ($statement->execute([$name])) {

        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            echo $row['name'] . '<br>';
        }
    }
}