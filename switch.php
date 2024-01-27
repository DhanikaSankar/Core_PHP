<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head>
<body>
    <?php

    $date = date('l');//gives current day
    echo $date."<br>";

    $grade = 'E';
    switch ($grade) {
        case 'A':
            echo"You did great";
            break;

        case 'B':
            echo"You did good";
            break;

        case 'C':
            echo"You did okay";
            break;

        case 'D':
            echo"You did poorly";
            break;

        case 'E':
            echo"You Failed.You Can, Do better next time.";
            break;
        
        default:
            echo"Not a valid grade";
            break;
    }

    ?>
</body>
</html>