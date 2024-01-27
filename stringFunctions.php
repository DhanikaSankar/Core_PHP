<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions in PHP</title>
    <h1></h1>
</head>

<body>
    <?php
        $name = "hadi rashad";
        $name = strtoupper($name);
        $name = "HADI RASHAD";
        $name = strtolower($name);
        $name = "         HADI     RASHAD     ";
        $name = trim($name); //Remove extra white space in the string
        $name = str_pad($name,20,"0"); // Add extra 5 zeros after the name 
        $name = strrev($name); // Reverese the string value
        $name = str_shuffle($name); // shuffle the string value
        

        $value = "hindi";
        $value = strcmp($value,"hinditthgh"); // string comparison if it equal it return 0 otherwise(not equal) it return 1 or -ve value

        $phone = "1234-5678-9876";
        $phone = str_replace('-','',$phone); // Replace one charactor with another

        $user = "Gopika Anil";
        // $user = strlen($user); // how many charactor in a string =>11
        // $user = strpos($user,"i"); // position or index of a charector appear first =>3

        $user= substr($user,6,10);//create substring add starting and ending index value

        $titles = "Hello User How are you?";
        $titles = explode(' ',$titles); // it will create an array
         
        foreach($titles as $title){
            echo $title . "<br>";
        }

        $username = array("Hadi","Rashad","P","V");
        $username = implode(" ",$username);
        echo $username. "<br>";

        echo $name."<br>";
        echo $phone."<br>";
        echo $value."<br>";
        echo $user."<br>";
    ?>

</body>

</html>