<?php
    include("..\database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Registration Form</h3>
    <form action="<?php  htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
        <label>User Name</label>
        <input type="text" name="user"><br><br>

        <label>Password</label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="login" value="Log In">

    </form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = filter_input(INPUT_POST,"user",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "Please Enter User Name";
        }elseif(empty($password)){
            echo "Please Enter Password";
        }else{
            $hash = password_hash($password,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (user,password) VALUES ('$username','$hash')";

            try {
                mysqli_query($conn,$sql);
                echo "User Registered Successfully";
            } catch (mysqli_sql_exception) {
                echo "User name already exist";
            }
        }
    }
  mysqli_close($conn);
?>