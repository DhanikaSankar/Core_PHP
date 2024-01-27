<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE STATEMENT</title>
</head>
<body>
    <?php
    $age = 20;

    if($age >= 20){
        echo "You may enter this site";
    }elseif($age <= 0){
        echo "That was not valid";
    }else{
        echo "You must be 20+ to enter this site.";
    }
    

    ?>
    
</body>
</html>