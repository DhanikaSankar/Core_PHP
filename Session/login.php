
<!------------------START A SESSION---------->
<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <form action="login.php" method="post">
        <input type="text" name="user_name" placeholder="Enter Name"><br><br>
        <input type="password" name="password" placeholder="Enter Password"><br><br>
        <input type="submit" name="login" value="Log In"><br><br>
    </form>

</body>

</html>

<?php

    if(isset($_POST['login'])){
        if(!empty($_POST['user_name']) && !empty($_POST['password'])){
            $_SESSION['username'] = $_POST['user_name'];
            $_SESSION['password'] = $_POST['password'];

            header('Location: home.php ');
        }else{
            echo "Invalid Credentials";
        }
    }




?>