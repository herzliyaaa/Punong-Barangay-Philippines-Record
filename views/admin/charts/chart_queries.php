<?php include "../../db_connection.php"; ?>

<?php 
            
            $pop = mysqli_query($connect, "Select COUNT(id) as pop_cnt from records");
            $population = mysqli_fetch_array($pop); 

            $pbquery = mysqli_query($connect, "Select COUNT(id) as pb_cnt from records where position ='Punong Barangay'");
            $pb = mysqli_fetch_array($pbquery);

            $sbmquery = mysqli_query($connect, "Select COUNT(id) as sbm_cnt from records where position ='Sangguniang Barangay Member'");
            $sbm = mysqli_fetch_array($sbmquery);

            $skquery = mysqli_query($connect, "Select COUNT(id) as sk_cnt from records where position ='SK Chairperson'");
            $sk = mysqli_fetch_array($skquery);
            ?>

<?php

// POPULATION COUNT OF BRGY OFFICIALS
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

$caraga =  mysqli_query($connect,"SELECT COUNT(id) as caraga_cnt from records where Region = 'Caraga' ");
$caraga_count = mysqli_fetch_array($caraga);

$mima =  mysqli_query($connect,"SELECT COUNT(id) as mima_cnt from records where Region = 'MIMAROPA' ");
$mima_count = mysqli_fetch_array($mima);

$armm =  mysqli_query($connect,"SELECT COUNT(id) as armm_cnt from records where Region = 'ARMM' ");
$armm_count = mysqli_fetch_array($armm);


// POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (punong barangay)


$ncr_pb =  mysqli_query($connect,"SELECT COUNT(id) as ncr_pb_cnt from records where Region = 'NCR' and position = 'Punong Barangay' ");
$ncr_pb_count = mysqli_fetch_array($ncr_pb);

$car_pb =  mysqli_query($connect,"SELECT COUNT(id) as car_pb_cnt from records where Region = 'CAR'and position = 'Punong Barangay' ");
$car_pb_count = mysqli_fetch_array($car_pb);

$region1_pb =  mysqli_query($connect,"SELECT COUNT(id) as region1_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay'");
$region1_pb_count = mysqli_fetch_array($region1_pb);

$region2_pb =  mysqli_query($connect,"SELECT COUNT(id) as region2_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' ");
$region2_pb_count = mysqli_fetch_array($region2_pb);

$region3_pb =  mysqli_query($connect,"SELECT COUNT(id) as region3_pb_cnt from records where Region = 'Region 3' and position = 'Punong Barangay' ");
$region3_pb_count = mysqli_fetch_array($region3_pb);

$region4a_pb =  mysqli_query($connect,"SELECT COUNT(id) as region4a_pb_cnt from records where Region = 'Region 4A' and position = 'Punong Barangay' ");
$region4a_pb_count = mysqli_fetch_array($region4a_pb);

// $region4b =  mysqli_query($connect,"SELECT COUNT(id) as region4b_cnt from records where Region = 'Region 4A' ");
// $region4b_pb_count = mysqli_fetch_array($region4b);

$region5_pb =  mysqli_query($connect,"SELECT COUNT(id) as region5_pb_cnt from records where Region = 'Region 5' and position = 'Punong Barangay' ");
$region5_pb_count = mysqli_fetch_array($region5_pb);

$region6_pb =  mysqli_query($connect,"SELECT COUNT(id) as region6_pb_cnt from records where Region = 'Region 6' and position = 'Punong Barangay' ");
$region6_pb_count = mysqli_fetch_array($region6_pb);

$region7_pb =  mysqli_query($connect,"SELECT COUNT(id) as region7_pb_cnt from records where Region = 'Region 7' and position = 'Punong Barangay' ");
$region7_pb_count = mysqli_fetch_array($region7_pb);

$region8_pb =  mysqli_query($connect,"SELECT COUNT(id) as region8_pb_cnt from records where Region = 'Region 8' and position = 'Punong Barangay' ");
$region8_pb_count = mysqli_fetch_array($region8_pb);

$region9_pb =  mysqli_query($connect,"SELECT COUNT(id) as region9_pb_cnt from records where Region = 'Region 9' and position = 'Punong Barangay' ");
$region9_pb_count = mysqli_fetch_array($region9_pb);

$region10_pb =  mysqli_query($connect,"SELECT COUNT(id) as region10_pb_cnt from records where Region = 'Region 10' and position = 'Punong Barangay' ");
$region10_pb_count = mysqli_fetch_array($region10_pb);

$region11_pb =  mysqli_query($connect,"SELECT COUNT(id) as region11_pb_cnt from records where Region = 'Region 11' and position = 'Punong Barangay' ");
$region11_pb_count = mysqli_fetch_array($region11_pb);

$region12_pb =  mysqli_query($connect,"SELECT COUNT(id) as region12_pb_cnt from records where Region = 'Region 12' and position = 'Punong Barangay' ");
$region12_pb_count = mysqli_fetch_array($region12_pb);

$caraga_pb =  mysqli_query($connect,"SELECT COUNT(id) as caraga_pb_cnt from records where Region = 'CARAGA' and position = 'Punong Barangay' ");
$caraga_pb_count = mysqli_fetch_array($caraga_pb);

$mimaropa_pb =  mysqli_query($connect,"SELECT COUNT(id) as mimaropa_pb_cnt from records where Region = 'MIMAROPA' and position = 'Punong Barangay' ");
$mimaropa_pb_count = mysqli_fetch_array($mimaropa_pb);

$armm_pb =  mysqli_query($connect,"SELECT COUNT(id) as armm_pb_cnt from records where Region = 'ARMM' and position = 'Punong Barangay' ");
$armm_pb_count = mysqli_fetch_array($armm_pb);


// POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (sangguniang)
// Sangguniang Barangay Member


$ncr_sbm =  mysqli_query($connect,"SELECT COUNT(id) as ncr_sbm_cnt from records where Region = 'NCR' and position = 'Sangguniang Barangay Member' ");
$ncr_sbm_count = mysqli_fetch_array($ncr_sbm);

$car_sbm =  mysqli_query($connect,"SELECT COUNT(id) as car_sbm_cnt from records where Region = 'CAR'and position = 'Sangguniang Barangay Member' ");
$car_sbm_count = mysqli_fetch_array($car_sbm);

$region1_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region1_sbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member'");
$region1_sbm_count = mysqli_fetch_array($region1_sbm);

$region2_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region2_sbm_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member' ");
$region2_sbm_count = mysqli_fetch_array($region2_sbm);

$region3_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region3_sbm_cnt from records where Region = 'Region 3' and position = 'Sangguniang Barangay Member' ");
$region3_sbm_count = mysqli_fetch_array($region3_sbm);

$region4a_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region4a_sbm_cnt from records where Region = 'Region 4A' and position = 'Sangguniang Barangay Member' ");
$region4a_sbm_count = mysqli_fetch_array($region4a_sbm);

// $region4b =  mysqli_query($connect,"SELECT COUNT(id) as region4b_cnt from records where Region = 'Region 4A' ");
// $region4b_sbm_count = mysqli_fetch_array($region4b);

$region5_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region5_sbm_cnt from records where Region = 'Region 5' and position = 'Sangguniang Barangay Member' ");
$region5_sbm_count = mysqli_fetch_array($region5_sbm);

$region6_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region6_sbm_cnt from records where Region = 'Region 6' and position = 'Sangguniang Barangay Member' ");
$region6_sbm_count = mysqli_fetch_array($region6_sbm);

$region7_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region7_sbm_cnt from records where Region = 'Region 7' and position = 'Sangguniang Barangay Member' ");
$region7_sbm_count = mysqli_fetch_array($region7_sbm);

$region8_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region8_sbm_cnt from records where Region = 'Region 8' and position = 'Sangguniang Barangay Member' ");
$region8_sbm_count = mysqli_fetch_array($region8_sbm);

$region9_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region9_sbm_cnt from records where Region = 'Region 9' and position = 'Sangguniang Barangay Member' ");
$region9_sbm_count = mysqli_fetch_array($region9_sbm);

$region10_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region10_sbm_cnt from records where Region = 'Region 10' and position = 'Sangguniang Barangay Member' ");
$region10_sbm_count = mysqli_fetch_array($region10_sbm);

$region11_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region11_sbm_cnt from records where Region = 'Region 11' and position = 'Sangguniang Barangay Member' ");
$region11_sbm_count = mysqli_fetch_array($region11_sbm);

$region12_sbm =  mysqli_query($connect,"SELECT COUNT(id) as region12_sbm_cnt from records where Region = 'Region 12' and position = 'Sangguniang Barangay Member' ");
$region12_sbm_count = mysqli_fetch_array($region12_sbm);

$caraga_sbm =  mysqli_query($connect,"SELECT COUNT(id) as caraga_sbm_cnt from records where Region = 'CARAGA' and position = 'Sangguniang Barangay Member' ");
$caraga_sbm_count = mysqli_fetch_array($caraga_sbm);

$mimaropa_sbm =  mysqli_query($connect,"SELECT COUNT(id) as mimaropa_sbm_cnt from records where Region = 'MIMAROPA' and position = 'Sangguniang Barangay Member' ");
$mimaropa_sbm_count = mysqli_fetch_array($mimaropa_sbm);

$armm_sbm =  mysqli_query($connect,"SELECT COUNT(id) as armm_sbm_cnt from records where Region = 'ARMM' and position = 'Sangguniang Barangay Member' ");
$armm_sbm_count = mysqli_fetch_array($armm_sbm);



// POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (SK)
// SK Chairperson


$ncr_sk =  mysqli_query($connect,"SELECT COUNT(id) as ncr_sk_cnt from records where Region = 'NCR' and position = 'SK Chairperson' ");
$ncr_sk_count = mysqli_fetch_array($ncr_sk);

$car_sk =  mysqli_query($connect,"SELECT COUNT(id) as car_sk_cnt from records where Region = 'CAR'and position = 'SK Chairperson' ");
$car_sk_count = mysqli_fetch_array($car_sk);

$region1_sk =  mysqli_query($connect,"SELECT COUNT(id) as region1_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'");
$region1_sk_count = mysqli_fetch_array($region1_sk);

$region2_sk =  mysqli_query($connect,"SELECT COUNT(id) as region2_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson' ");
$region2_sk_count = mysqli_fetch_array($region2_sk);

$region3_sk =  mysqli_query($connect,"SELECT COUNT(id) as region3_sk_cnt from records where Region = 'Region 3' and position = 'SK Chairperson' ");
$region3_sk_count = mysqli_fetch_array($region3_sk);

$region4a_sk =  mysqli_query($connect,"SELECT COUNT(id) as region4a_sk_cnt from records where Region = 'Region 4A' and position = 'SK Chairperson' ");
$region4a_sk_count = mysqli_fetch_array($region4a_sk);

// $region4b =  mysqli_query($connect,"SELECT COUNT(id) as region4b_cnt from records where Region = 'Region 4A' ");
// $region4b_sk_count = mysqli_fetch_array($region4b);

$region5_sk =  mysqli_query($connect,"SELECT COUNT(id) as region5_sk_cnt from records where Region = 'Region 5' and position = 'SK Chairperson' ");
$region5_sk_count = mysqli_fetch_array($region5_sk);

$region6_sk =  mysqli_query($connect,"SELECT COUNT(id) as region6_sk_cnt from records where Region = 'Region 6' and position = 'SK Chairperson' ");
$region6_sk_count = mysqli_fetch_array($region6_sk);

$region7_sk =  mysqli_query($connect,"SELECT COUNT(id) as region7_sk_cnt from records where Region = 'Region 7' and position = 'SK Chairperson' ");
$region7_sk_count = mysqli_fetch_array($region7_sk);

$region8_sk =  mysqli_query($connect,"SELECT COUNT(id) as region8_sk_cnt from records where Region = 'Region 8' and position = 'SK Chairperson' ");
$region8_sk_count = mysqli_fetch_array($region8_sk);

$region9_sk =  mysqli_query($connect,"SELECT COUNT(id) as region9_sk_cnt from records where Region = 'Region 9' and position = 'SK Chairperson' ");
$region9_sk_count = mysqli_fetch_array($region9_sk);

$region10_sk =  mysqli_query($connect,"SELECT COUNT(id) as region10_sk_cnt from records where Region = 'Region 10' and position = 'SK Chairperson' ");
$region10_sk_count = mysqli_fetch_array($region10_sk);

$region11_sk =  mysqli_query($connect,"SELECT COUNT(id) as region11_sk_cnt from records where Region = 'Region 11' and position = 'SK Chairperson' ");
$region11_sk_count = mysqli_fetch_array($region11_sk);

$region12_sk =  mysqli_query($connect,"SELECT COUNT(id) as region12_sk_cnt from records where Region = 'Region 12' and position = 'SK Chairperson' ");
$region12_sk_count = mysqli_fetch_array($region12_sk);

$caraga_sk =  mysqli_query($connect,"SELECT COUNT(id) as caraga_sk_cnt from records where Region = 'CARAGA' and position = 'SK Chairperson' ");
$caraga_sk_count = mysqli_fetch_array($caraga_sk);

$mimaropa_sk =  mysqli_query($connect,"SELECT COUNT(id) as mimaropa_sk_cnt from records where Region = 'MIMAROPA' and position = 'SK Chairperson' ");
$mimaropa_sk_count = mysqli_fetch_array($mimaropa_sk);

$armm_sk =  mysqli_query($connect,"SELECT COUNT(id) as armm_sk_cnt from records where Region = 'ARMM' and position = 'SK Chairperson' ");
$armm_sk_count = mysqli_fetch_array($armm_sk);




?>