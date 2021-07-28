<?php

if (isset($_POST['add_user_btn'])) {
    include "../../db_connection.php";

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    


    $savesql = "INSERT INTO `users`(
                    `user_name`,
                    `password`,
                    `name`,
                    `role`
                    ) 
            
            VALUES     (
                        '$user_name',
                        ' $password ',
                        '$name',
                        '$role'
                        
                        )";

    mysqli_query($connect, $savesql);
    header("location: users_list.php");
} 

// if (mysqli_query($connect, $savesql)) {
//     echo "New record created successfully";}
