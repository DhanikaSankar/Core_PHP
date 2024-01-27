<?php
    include("database.php");

    //   ------------------Single Value selection

        //   $sql = "SELECT * FROM users WHERE user='Hadi Rashad' ";

        //   $result = mysqli_query($conn,$sql);

        //   if(mysqli_num_rows($result) > 0){
        //     $row = mysqli_fetch_assoc($result);
        //     echo $row["id"]."<br>";
        //     echo $row["user"]."<br>";
        //     echo $row["reg_date"]."<br>";
        //   }else{
        //     echo "No User found";
        //   }



    //   ------------------All Filed Selection------------

    $sql = "SELECT * FROM users ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    } else {
        echo "No User found";
    }


    mysqli_close($conn);
?>