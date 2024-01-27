<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>

<body>
    <?php
        // SET COOKIE
            setcookie('fav_food','pizza',time()+(86400 * 2),'/'); //expired after 2 days (86400 is one day in seconds)
        // DELETE COOKIE
            // setcookie('fav_food','pizza',time()-0,'/');

            setcookie('fav_drink','black tea',time()+(86400 * 3),'/'); //expired after 3 days 
            setcookie('fav_color','Yellow',time()+(86400 * 4),'/'); //expired after 4 days

        //DISPLAY COOKIE :It is an associative array
        foreach($_COOKIE as $key=>$value){
            echo "{$key} = {$value} <br>";
        }

        // PRINT COOKIE : If it contain favorie food
        if(isset($_COOKIE['fav_food'])){
            echo "Buy some {$_COOKIE['fav_food']}";
        }else{
            echo "Sorry. We dont know your favorite food.";
        }
    ?>

</body>

</html>