<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server in PHP</title>
</head>

<body>
    <br>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form><br><br>

</body>

</html>


<?php
    foreach ($_SERVER as $key => $value) {
        echo "{$key} = {$value} .<br>";
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        echo "Log Out";
    }

// REQUEST_METHOD = given form method
// PHP_SELF = path of the current page
?>