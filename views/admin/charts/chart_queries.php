<?php include "./db_connection.php"; ?>

<?php
$ncr_region =  mysqli_query($conn,"SELECT COUNT(id) as ncr_cnt from records where Region = 'NCR' ");
$ncr_count = mysqli_fetch_array($ncr_region);

$car_region =  mysqli_query($conn,"SELECT COUNT(id) as car_cnt from records where Region = 'CAR' ");
$car_count = mysqli_fetch_array($car_region);

$region1 =  mysqli_query($conn,"SELECT COUNT(id) as region1_cnt from records where Region = 'Region 1' ");
$region1_count = mysqli_fetch_array($region1);

$region2 =  mysqli_query($conn,"SELECT COUNT(id) as region2_cnt from records where Region = 'Region 2' ");
$region2_count = mysqli_fetch_array($region2);

$region3 =  mysqli_query($conn,"SELECT COUNT(id) as region3_cnt from records where Region = 'Region 3' ");
$region3_count = mysqli_fetch_array($region3);

$region4a =  mysqli_query($conn,"SELECT COUNT(id) as region4a_cnt from records where Region = 'Region 4A' ");
$region4a_count = mysqli_fetch_array($region4a);

$region4b =  mysqli_query($conn,"SELECT COUNT(id) as region4b_cnt from records where Region = 'Region 4A' ");
$region4b_count = mysqli_fetch_array($region4b);

$region5 =  mysqli_query($conn,"SELECT COUNT(id) as region5_cnt from records where Region = 'Region 5' ");
$region5_count = mysqli_fetch_array($region5);












?>