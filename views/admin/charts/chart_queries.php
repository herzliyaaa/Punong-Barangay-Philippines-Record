<?php include "./db_connection.php"; ?>

<?php  include "./db_connection.php";
$ncr_region =  mysqli_query($connect,"SELECT COUNT(id) as ncr_cnt from records where Region = 'NCR' ");
$ncr_count = mysqli_fetch_array($ncr_region);

$car_region =  mysqli_query($connect,"SELECT COUNT(id) as car_cnt from records where Region = 'CAR' ");
$car_count = mysqli_fetch_array($car_region);

$region1 =  mysqli_query($connect,"SELECT COUNT(id) as region1_cnt from records where Region = 'Region 1' ");
$region1_count = mysqli_fetch_array($region1);

$region2 =  mysqli_query($connect,"SELECT COUNT(id) as region2_cnt from records where Region = 'Region 2' ");
$region2_count = mysqli_fetch_array($region2);

$region3 =  mysqli_query($connect,"SELECT COUNT(id) as region3_cnt from records where Region = 'Region 3' ");
$region3_count = mysqli_fetch_array($region3);

$region4a =  mysqli_query($connect,"SELECT COUNT(id) as region4a_cnt from records where Region = 'Region 4A' ");
$region4a_count = mysqli_fetch_array($region4a);

$region4b =  mysqli_query($connect,"SELECT COUNT(id) as region4b_cnt from records where Region = 'Region 4B' ");
$region4b_count = mysqli_fetch_array($region4b);

$region5 =  mysqli_query($connect,"SELECT COUNT(id) as region5_cnt from records where Region = 'Region 5' ");
$region5_count = mysqli_fetch_array($region5);

$region6 =  mysqli_query($connect,"SELECT COUNT(id) as region6_cnt from records where Region = 'Region 6' ");
$region6_count = mysqli_fetch_array($region6);

$region7 =  mysqli_query($connect,"SELECT COUNT(id) as region7_cnt from records where Region = 'Region 7' ");
$region7_count = mysqli_fetch_array($region7);

$region8 =  mysqli_query($connect,"SELECT COUNT(id) as region8_cnt from records where Region = 'Region 8' ");
$region8_count = mysqli_fetch_array($region8);

$region9 =  mysqli_query($connect,"SELECT COUNT(id) as region9_cnt from records where Region = 'Region 9' ");
$region9_count = mysqli_fetch_array($region9);

$region10 =  mysqli_query($connect,"SELECT COUNT(id) as region10_cnt from records where Region = 'Region 10' ");
$region10_count = mysqli_fetch_array($region10);

$region11 =  mysqli_query($connect,"SELECT COUNT(id) as region11_cnt from records where Region = 'Region 11' ");
$region11_count = mysqli_fetch_array($region11);

$region12 =  mysqli_query($connect,"SELECT COUNT(id) as region12_cnt from records where Region = 'Region 12' ");
$region12_count = mysqli_fetch_array($region12);



?>