<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitize and Validation</title>
</head>

<body>
    <!-- IT will remove all unwanted charectors form the input filed. -->
    <form action="sanitizeAndvalidation.php" method="post">
        <input type="text" name="user" placeholder="Enter Name"><br><br>
        <input type="text" name="age" placeholder="Enter Age"><br> <br>
        <input type="text" name="email" placeholder="Enter Email"><br><br>
        <input type="submit" name="login" value="Submit"> <br><br>
    </form>

</body>

</html>
<?php


//-------------------SANITIZE INPUT
// if(isset($_POST['login'])){
//    
//     $user_name = filter_input(INPUT_POST,"user",FILTER_SANITIZE_SPECIAL_CHARS); 
//     $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT); // only print integer value
//     $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL); //filter illegal charactors from email

//     echo "Your name is {$user_name} <br>";
//     echo "You are {$age} years old <br>";
//     echo "Your email is {$email}<br>";
// }



// ----------------Validation
if (isset($_POST['login'])) {

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    //  Age Validation
    if (empty($age)) {
        echo "That age wasn't valid <br>";
    } else {
        echo "You are {$age} years old <br>";
    }

    // Email validation
    if (empty($email)) {
        echo "That email wasn't valid <br>";
    } else {
        echo "You are email is {$email} <br>";
    }
}

?>