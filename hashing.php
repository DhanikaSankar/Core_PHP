<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing in PHP</title>
</head>
<body>
    <?php
        $password = "abcd123";

        $hash = password_hash($password,PASSWORD_DEFAULT);

        // echo $hash;

        // Testing Password are equal 
        if(password_verify('abcd1234',$hash)){
            echo "Both passwords are equal";
        }else{
            echo "Incorrect Password";
        }
    ?>
</body>
</html>