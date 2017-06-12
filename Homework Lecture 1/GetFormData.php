<html>
<form>
    First name:<br>
    <input type="text" name="firstname"><br>
    Age:<br>
    <input type="int" name="age"> <br>

    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>

    <input type="submit" value="Submit">
</form>
<?php

if (isset($_GET['firstname']) && isset($_GET['age']) && isset($_GET['gender'])){

    $firstname = $_GET['firstname'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    echo 'My name is ' . $firstname . '. I am ' . $age . ' years old. I am ' . $gender ;

}

?>

</html>
