<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty Functions</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>User Name</label><br>
        <input type="text" name="name"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        if(empty($_POST['name'])){
            echo"User Name field is empty";
        }else if(empty($_POST['password'])){
            echo"Password field is empty";
        }else{
            echo "Hello {$_POST['name']}";
        }
    }
?>