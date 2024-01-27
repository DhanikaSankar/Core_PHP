<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        function is_even($number){
            $result = $number % 2;

            if($result == 0){
                return "Given Number Even.<br>";
            }else{
                return "Given Number is Odd.<br>";
            }
        }

        echo is_even(3);
        echo is_even(22);

    ?>    
</body>
</html>