<?php

if (isset($_POST['add_official_btn'])) {
    include "../../db_connection.php";


    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $suffix = $_POST['suffix'];
    $position = $_POST['position'];
    $region = $_POST['region'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    $email = $_POST['email'];
    $barangay_hall_tel_no = $_POST['barangay_hall_tel_no'];


    $sql = "INSERT INTO `records`(
                    `first_name`,
                    `middle_name`,
                    `last_name`,
                    `suffix`,
                    `position`, 
                    `region`,
                    `province`,
                    `city`,
                    `barangay`,
                    `email`,   
                    `barangay_hall_tel_no` ) 
            
            VALUES     (
                        '$first_name',
                        '$middle_name ',
                        '$last_name',
                        '$suffix',
                        '$position',
                        '$region',
                        '$province',
                        '$city',
                        '$barangay',      
                        '$email',
                        '$barangay_hall_tel_no'
                        )";

    mysqli_query($connect, $sql);
    header("location: officials_directory.php");
} 
// if (mysqli_query($connect, $sql)) {
//     echo "New record created successfully";}

else {
    echo "Error: " . $savesql . "<br>" . mysqli_error($connect);
}