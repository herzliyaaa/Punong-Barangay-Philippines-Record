<?php include "../../db_connection.php"; ?>

<?php

// "Alilem Daya (Pob.)", "Amilongan", "Anaao", "Apang", "Apaya", "Batbato", "Daddaay", "Dalawa", "Kiat"


// POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (punong barangay)


$alilemd_pb =  mysqli_query($connect,"SELECT COUNT(id) as alilemd_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Alilem Daya (Pob.)' ");
$alilemd_pb_count = mysqli_fetch_array($alilemd_pb);

$amilongan_pb =  mysqli_query($connect,"SELECT COUNT(id) as amilongan_pb_cnt from records where Region = 'Region 1'and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Amilongan' ");
$amilongan_pb_count = mysqli_fetch_array($amilongan_pb);

$anaao_pb =  mysqli_query($connect,"SELECT COUNT(id) as anaao_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Anaao' ");
$anaao_pb_count = mysqli_fetch_array($anaao_pb);

$apang_pb =  mysqli_query($connect,"SELECT COUNT(id) as apang_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Apang' ");
$apang_pb_count = mysqli_fetch_array($apang_pb);

$apaya_pb =  mysqli_query($connect,"SELECT COUNT(id) as apaya_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Apaya'");
$apaya_pb_count = mysqli_fetch_array($apaya_pb);



$batbato_pb =  mysqli_query($connect,"SELECT COUNT(id) as batbato_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay'AND city = 'Alilem' and barangay = 'Batbato'");
$batbato_pb_count = mysqli_fetch_array($batbato_pb);

$daddaay_pb =  mysqli_query($connect,"SELECT COUNT(id) as daddaay_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Daddaay'");
$daddaay_pb_count = mysqli_fetch_array($daddaay_pb);

$dalawa_pb =  mysqli_query($connect,"SELECT COUNT(id) as dalawa_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Dalawa'");
$dalawa_pb_count = mysqli_fetch_array($dalawa_pb);

$kiat_pb =  mysqli_query($connect,"SELECT COUNT(id) as kiat_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' AND city = 'Alilem' and barangay = 'Kiat'");
$kiat_pb_count = mysqli_fetch_array($kiat_pb);


// POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (sangguniang)
// Sangguniang Barangay Member


$alilemd_sbm =  mysqli_query($connect,"SELECT COUNT(id) as alilemd_sbm_cnt from records where Region = 'Region 1'  and position = 'Sangguniang Barangay Member'  AND city = 'Alilem' and barangay = 'Alilem Daya (Pob.)' ");
$alilemd_sbm_count = mysqli_fetch_array($alilemd_sbm);

$amilongan_sbm =  mysqli_query($connect,"SELECT COUNT(id) as amilongan_sbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' AND city = 'Alilem' and barangay = 'Amilongan' ");
$amilongan_sbm_count = mysqli_fetch_array($amilongan_sbm);

$anaao_sbm =  mysqli_query($connect,"SELECT COUNT(id) as anaao_sbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' AND city = 'Alilem' and barangay = 'Anaao'");
$anaao_sbm_count = mysqli_fetch_array($anaao_sbm);

$apang_sbm =  mysqli_query($connect,"SELECT COUNT(id) as apang_sbm_cnt from records where Region = 'Region 1'  and position = 'Sangguniang Barangay Member' AND city = 'Alilem' and barangay = 'Apang' ");
$apang_sbm_count = mysqli_fetch_array($apang_sbm);

$apaya_sbm =  mysqli_query($connect,"SELECT COUNT(id) as apaya_sbm_cnt from records where Region = 'Region 1'  and position = 'Sangguniang Barangay Member'  AND city = 'Alilem' and barangay = 'Apaya'");
$apaya_sbm_count = mysqli_fetch_array($apaya_sbm);

$batbato_sbm =  mysqli_query($connect,"SELECT COUNT(id) as batbato_sbm_cnt from records where Region = 'Region 1'  and position = 'Sangguniang Barangay Member' AND city = 'Alilem' and barangay = 'Batbato'");
$batbato_sbm_count = mysqli_fetch_array($batbato_sbm);


$daddaay_sbm =  mysqli_query($connect,"SELECT COUNT(id) as daddaay_sbm_cnt from records where Region = 'Region 1'  and position = 'Sangguniang Barangay Member' AND city = 'Alilem' and barangay = 'Daddaay'");
$daddaay_sbm_count = mysqli_fetch_array($daddaay_sbm);

$dalawa_sbm =  mysqli_query($connect,"SELECT COUNT(id) as dalawa_sbm_cnt from records where Region = 'Region 1'  and position = 'Sangguniang Barangay Member' AND city = 'Alilem' and barangay = 'Dalawa' ");
$dalawa_sbm_count = mysqli_fetch_array($dalawa_sbm);

$kiat_sbm =  mysqli_query($connect,"SELECT COUNT(id) as kiat_sbm_cnt from records where Region = 'Region 1'  and position = 'Sangguniang Barangay Member' AND city = 'Alilem' and barangay = 'Kiat' ");
$kiat_sbm_count = mysqli_fetch_array($kiat_sbm);



// POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (SK)
// SK Chairperson


$alilemd_sk =  mysqli_query($connect,"SELECT COUNT(id) as alilemd_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' AND city = 'Alilem' and barangay = 'Alilem Daya (Pob.)' ");
$alilemd_sk_count = mysqli_fetch_array($alilemd_sk);

$amilongan_sk =  mysqli_query($connect,"SELECT COUNT(id) as amilongan_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' AND city = 'Alilem' and barangay = 'Amilongan' ");
$amilongan_sk_count = mysqli_fetch_array($amilongan_sk);


$anaao_sk =  mysqli_query($connect,"SELECT COUNT(id) as anaao_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' AND city = 'Alilem' and barangay = 'Anaao' ");
$anaao_sk_count = mysqli_fetch_array($anaao_sk);

$apang_sk =  mysqli_query($connect,"SELECT COUNT(id) as apang_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  AND city = 'Alilem' and barangay = 'Apang'");
$apang_sk_count = mysqli_fetch_array($apang_sk);

$apaya_sk =  mysqli_query($connect,"SELECT COUNT(id) as apaya_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  AND city = 'Alilem' and barangay = 'Apaya' ");
$apaya_sk_count = mysqli_fetch_array($apaya_sk);

$batbato_sk =  mysqli_query($connect,"SELECT COUNT(id) as batbato_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' AND city = 'Alilem' and barangay = 'Batbato'");
$batbato_sk_count = mysqli_fetch_array($batbato_sk);

$daddaay_sk =  mysqli_query($connect,"SELECT COUNT(id) as daddaay_sk_cnt from records where Region ='Region 1' and position = 'SK Chairperson' AND city = 'Alilem' and barangay = 'Daddaay' ");
$daddaay_sk_count = mysqli_fetch_array($daddaay_sk);


$dalawa_sk =  mysqli_query($connect,"SELECT COUNT(id) as dalawa_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' AND city = 'Alilem' and barangay = 'Dalawa'");
$dalawa_sk_count = mysqli_fetch_array($dalawa_sk);

$kiat_sk =  mysqli_query($connect,"SELECT COUNT(id) as kiat_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' AND city = 'Alilem' and barangay = 'Kiat' ");
$kiat_sk_count = mysqli_fetch_array($kiat_sk);





?>