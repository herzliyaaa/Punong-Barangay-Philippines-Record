<?php include "../../db_connection.php"; ?>

<?php


// Region 1 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (punong barangay)  (Ilocos Norte)


$adams_pb =  mysqli_query($connect, "SELECT COUNT(id) as adpb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Norte' and city =  'Adams'");
$adpb = mysqli_fetch_array($adams_pb);

$bacarra_pb =  mysqli_query($connect, "SELECT COUNT(id) as baccarapb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Norte' and city =  'Bacarra'");
$baccarapb = mysqli_fetch_array($bacarra_pb);

$badoc_pb =  mysqli_query($connect, "SELECT COUNT(id) as badocpb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Norte' and city =  'Badoc'");
$badocpb = mysqli_fetch_array($badoc_pb);

$burgos_pb =  mysqli_query($connect, "SELECT COUNT(id) as burgospb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Norte' and city =  'Burgos'");
$burgospb = mysqli_fetch_array($burgos_pb);

$carasi_pb =  mysqli_query($connect, "SELECT COUNT(id) as carasipb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Norte' and city =  'Carasi'");
$carasipb = mysqli_fetch_array($carasi_pb);


// Region 1 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (Ilocos Norte)
// Sangguniang Barangay Member


$adams_sbm =  mysqli_query($connect, "SELECT COUNT(id) as adamssbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'Ilocos Norte' and city =  'Adams' ");
$adamssbm = mysqli_fetch_array($adams_sbm);

$bacarra_sbm =  mysqli_query($connect, "SELECT COUNT(id) as bacarrasbm_cnt from records where Region = 'Region 1'and position = 'Sangguniang Barangay Member'   and province = 'Ilocos Norte' and city =  'Bacarra'");
$bacarrasbm = mysqli_fetch_array($bacarra_sbm);

$badoc_sbm =  mysqli_query($connect, "SELECT COUNT(id) as badocsbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member'   and province = 'Ilocos Norte' and city =  'Badoc'");
$badocsbm = mysqli_fetch_array($badoc_sbm);

$burgos_sbm =  mysqli_query($connect, "SELECT COUNT(id) as burgossbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'Ilocos Norte' and city =  'Burgos' ");
$burgossbm = mysqli_fetch_array($burgos_sbm);

$carasi_sbm =  mysqli_query($connect, "SELECT COUNT(id) as carasisbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'Ilocos Norte' and city =  'Carasi' ");
$carasisbm = mysqli_fetch_array($carasi_sbm);

// Region 1 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (SK)
// SK Chairperson


$adams_sk =  mysqli_query($connect, "SELECT COUNT(id) as adamssk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Ilocos Norte' and city =  'Adams' ");
$adamssk = mysqli_fetch_array($adams_sk);

$bacarra_sk =  mysqli_query($connect, "SELECT COUNT(id) as bacarrask_cnt from records where Region = 'Region 1'and position = 'SK Chairperson'  and province = 'Ilocos Norte' and city =  'Bacarra'");
$bacarrask = mysqli_fetch_array($bacarra_sk);

$badoc_sk =  mysqli_query($connect, "SELECT COUNT(id) as badocsk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Ilocos Norte' and city =  'Badoc'");
$badocsk = mysqli_fetch_array($badoc_sk);

$burgos_sk =  mysqli_query($connect, "SELECT COUNT(id) as burgossk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Ilocos Norte' and city =  'Burgos'");
$burgossk = mysqli_fetch_array($burgos_sk);

$carasi_sk =  mysqli_query($connect, "SELECT COUNT(id) as carasisk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Ilocos Norte'  and city =  'Carasi'");
$carasisk = mysqli_fetch_array($carasi_sk);


?>




<?php

// POPULATION COUNT OF BRGY OFFICIALS (Ilocos Norte)
$adams_in =  mysqli_query($connect, "SELECT COUNT(id) as adams_cnt from records where Region = 'Region 1' and province = 'Ilocos Norte' and city =  'Adams'");
$adams_count = mysqli_fetch_array($adams_in);

$bacarra_in =  mysqli_query($connect, "SELECT COUNT(id) as bacarra_cnt from records where Region = 'Region 1' and province = 'Ilocos Norte' and city =  'Bacarra'");
$bacarra_count = mysqli_fetch_array($bacarra_in);

$badoc_in =  mysqli_query($connect, "SELECT COUNT(id) as badoc_cnt from records where Region = 'Region 1' and province = 'Ilocos Norte'  and city =  'Badoc' ");
$badoc_count = mysqli_fetch_array($badoc_in);

$burgos_in =  mysqli_query($connect, "SELECT COUNT(id) as burgos_cnt from records where Region = 'Region 1' and province = 'Ilocos Norte' and city =  'Burgos'");
$burgos_count = mysqli_fetch_array($burgos_in);

$carasi_in =  mysqli_query($connect, "SELECT COUNT(id) as carasi_cnt from records where Region = 'Region 1' and province = 'Ilocos Norte'  and city =  'Carasi'");
$carasi_count = mysqli_fetch_array($carasi_in);


// POPULATION COUNT OF BRGY OFFICIALS
$cagayan_region2 =  mysqli_query($connect, "SELECT COUNT(id) as cag_cnt from records where Region = 'Region 2' and province = 'Cagayan' ");
$cag_count = mysqli_fetch_array($cagayan_region2);

$quirino_region2 =  mysqli_query($connect, "SELECT COUNT(id) as qu_cnt from records where Region = 'Region 2' and province = 'Quirino'");
$qu_count = mysqli_fetch_array($quirino_region2);

$nv_region2 =  mysqli_query($connect, "SELECT COUNT(id) as nv_cnt from records where Region = 'Region 2' and province = 'Nueva Vizcaya'");
$nv_count = mysqli_fetch_array($nv_region2);


$isabela_region2 =  mysqli_query($connect, "SELECT COUNT(id) as isabela_cnt from records where Region = 'Region 2' and province = 'Isabela'");
$isabela_count = mysqli_fetch_array($isabela_region2);


$batanes_region2 =  mysqli_query($connect, "SELECT COUNT(id) as batanes_cnt from records where Region = 'Region 2' and province = 'Batanes' ");
$batanes_count = mysqli_fetch_array($batanes_region2);




?>



<?php


// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (punong barangay)


$cagayan_pb =  mysqli_query($connect, "SELECT COUNT(id) as cagayan_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Cagayan'");
$cagpb = mysqli_fetch_array($cagayan_pb);

$quirino_pb =  mysqli_query($connect, "SELECT COUNT(id) as quirino_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Quirino'");
$qupb = mysqli_fetch_array($quirino_pb);

$nv_pb =  mysqli_query($connect, "SELECT COUNT(id) as nv_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Nueva Vizcaya'");
$nvpb = mysqli_fetch_array($nv_pb);

$isabela_pb =  mysqli_query($connect, "SELECT COUNT(id) as isabela_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Isabela'");
$isabelapb = mysqli_fetch_array($isabela_pb);

$batanes_pb =  mysqli_query($connect, "SELECT COUNT(id) as batanes_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Batanes'");
$batanespb = mysqli_fetch_array($batanes_pb);


// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (sangguniang)
// Sangguniang Barangay Member


$cagayan_sbm =  mysqli_query($connect, "SELECT COUNT(id) as cagayan_sbm_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member' and province = 'Cagayan' ");
$cagsbm = mysqli_fetch_array($cagayan_sbm);

$quirino_sbm =  mysqli_query($connect, "SELECT COUNT(id) as quirino_sbm_cnt from records where Region = 'Region 2'and position = 'Sangguniang Barangay Member'  and province = 'Quirino'");
$qusbm = mysqli_fetch_array($quirino_sbm);

$nv_sbm =  mysqli_query($connect, "SELECT COUNT(id) as nv_smb_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member'  and province = 'Nueva Vizcaya'");
$nvsbm = mysqli_fetch_array($nv_sbm);

$isabela_sbm =  mysqli_query($connect, "SELECT COUNT(id) as isabela_smb_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member' and province = 'Isabela' ");
$isabelasbm = mysqli_fetch_array($isabela_sbm);

$batanes_sbm =  mysqli_query($connect, "SELECT COUNT(id) as batanes_smb_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member' and province = 'Batanes' ");
$batanessbm = mysqli_fetch_array($batanes_sbm);

// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (SK)
// SK Chairperson


$cagayan_sk =  mysqli_query($connect, "SELECT COUNT(id) as cagayan_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson'  and province = 'Cagayan' ");
$cagsk = mysqli_fetch_array($cagayan_sk);

$quirino_sk =  mysqli_query($connect, "SELECT COUNT(id) as quirino_sk_cnt from records where Region = 'Region 2'and position = 'SK Chairperson'  and province = 'Quirino' ");
$qusk = mysqli_fetch_array($quirino_sk);

$nv_sk =  mysqli_query($connect, "SELECT COUNT(id) as nv_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson'  and province = 'Nueva Vizcaya'");
$nvsk = mysqli_fetch_array($nv_sk);

$isabela_sk =  mysqli_query($connect, "SELECT COUNT(id) as isabela_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson' and province = 'Isabela'");
$isabelask = mysqli_fetch_array($isabela_sk);


$batanes_sk =  mysqli_query($connect, "SELECT COUNT(id) as batanes_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson' and province = 'Batanes'");
$batanessk = mysqli_fetch_array($batanes_sk);


?>
