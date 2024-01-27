<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="foods[]" value="Apple">Apple<br>
        <input type="checkbox" name="foods[]" value="Banana">Banana<br>
        <input type="checkbox" name="foods[]" value="Orange">Orange<br><br>
        <input type="submit" name="submit"><br>
    </form>

</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $foods = null;

    if (isset($_POST['foods'])) {
        $foods = $_POST['foods'];

        foreach ($foods as $food) {
            echo $food . "<br>";
        }
    }else{
        echo"Please select a value";
    }

    
}
?>