<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country - capital</title>
</head>

<body>
    <form action="country.php" method="post">
        <label>Country</label>
        <input type="text" name="country">
        <input type="submit" name="Find Capital">
    </form>

</body>

</html>

<?php

    $country = $_POST['country'];

    $associative_arrays = array(
        'USA' => 'Washington DC',
        'India' => 'New Delhi',
        'Japan' => 'Kyoto'
    );

    $capital = $associative_arrays[$country];

    echo "The capital of {$country} is {$capital}";
?>