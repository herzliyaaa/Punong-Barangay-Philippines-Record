<?php

if (isset($_POST['edit_user_btn'])) {
    include "../../db_connection.php";

    $id= $_POST['id'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = $_POST['role'];
   

    $sql = "UPDATE `users` SET
                    `user_name`='$user_name',
                    `password`='$password',
                    `name`='$name',
                    `role`='$role'
                    WHERE `id` = '$id'";

                mysqli_query($connect , $sql);
                header("location: users_details.php?id=$id"); 
}

// if (mysqli_query($connect, $sql)) {
//     echo "New record created successfully";}

else {
    echo "Error: " . $savesql . "<br>" . mysqli_error($connect);
}