<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h3>Welcome
        <?php
            echo $_SESSION['username'];
        ?>
    </h3><br>

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>

</html>

<?php
    // $_SESSION
    if (isset($_POST['logout'])) {
        session_destroy();
        header('Location:login.php');
    }
?>