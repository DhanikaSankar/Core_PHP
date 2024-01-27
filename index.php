<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="">USER NAME</label><br>
        <input type="text" name="name"><br><br>
        <label for="">PASSWORD</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Log In</button><br><br>
    </form>


</body>

</html>

<?php

echo"{$_GET['name']} <br>";
echo"{$_GET['password']} <br>";
?>