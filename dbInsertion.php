<?php
include('database.php');

$username = "Gokul Ganesh";
$password = 'gokul1234';
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user,password) VALUES ('$username','$hash')";

try {
    mysqli_query($conn, $sql);
    echo "Data inserted successfully.";
} catch (mysqli_sql_exception) {

    echo "Data Couldnt Inserted.";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Insertion</title>
</head>

<body>
    <h3>DB Table Data Insertion</h3>
</body>

</html>