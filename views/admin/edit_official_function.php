<?php

if (isset($_POST['edit_official_btn'])) {
    include "../../db_connection.php";

    $id= $_POST['id'];
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


    $sql = "UPDATE `records` SET
                    `first_name`='$first_name',
                    `middle_name`='$middle_name',
                    `last_name`='$last_name',
                    `suffix`='$suffix',
                    `position`='$position', 
                    `region`='$region',
                    `province`='$province',
                    `city`='$city',
                    `barangay`='$barangay',
                    `email`='$email',   
                    `barangay_hall_tel_no` ='$barangay_hall_tel_no'
                    WHERE `id` = '$id'";

                mysqli_query($connect , $sql);
                header("location: official_details.php?id=$id"); 
}

// if (mysqli_query($connect, $sql)) {
//     echo "New record created successfully";}

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}