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
$alilem_is =  mysqli_query($connect, "SELECT COUNT(id) as alilem_cnt from records where Region = 'Region 1' and province = 'Ilocos Sur' and city =  'Alilem'");
$alilem_count = mysqli_fetch_array($alilem_is);

$banayoyo_is =  mysqli_query($connect, "SELECT COUNT(id) as banayoyo_cnt from records where Region = 'Region 1' and province = 'Ilocos Sur' and city =  'Banayoyo'");
$banayoyo_count = mysqli_fetch_array($banayoyo_is);

$burgos_is =  mysqli_query($connect, "SELECT COUNT(id) as burgos_cnt from records where Region = 'Region 1' and province = 'Ilocos Sur' and city =  'Burgos'");
$burgos_count = mysqli_fetch_array($burgos_is);


$cabugao_is =  mysqli_query($connect, "SELECT COUNT(id) as cabugao_cnt from records where Region = 'Region 1' and province = 'Ilocos Sur' and city =  'Cabugao'");
$cabugao_count = mysqli_fetch_array($cabugao_is);


$cervantes_is =  mysqli_query($connect, "SELECT COUNT(id) as cervantes_cnt from records where Region = 'Region 1' and province = 'Ilocos Sur' and city =  'Cervantes' ");
$cervantes_count = mysqli_fetch_array($cervantes_is);




?>



<?php


// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (punong barangay)


$alilem_pb =  mysqli_query($connect, "SELECT COUNT(id) as alilem_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Sur' and city =  'Alilem'");
$alilempb = mysqli_fetch_array($alilem_pb);

$banayoyo_pb =  mysqli_query($connect, "SELECT COUNT(id) as banayoyo_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Sur' and city =  'Banayoyo'");
$banayoyopb = mysqli_fetch_array($banayoyo_pb);

$burgos_pb =  mysqli_query($connect, "SELECT COUNT(id) as burgos_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Sur' and city =  'Burgos'");
$burgospb = mysqli_fetch_array($burgos_pb);

$cabugao_pb =  mysqli_query($connect, "SELECT COUNT(id) as cabugao_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Sur' and city =  'Cabugao'");
$cabugaopb = mysqli_fetch_array($cabugao_pb);

// $cervantes_pb =  mysqli_query($connect, "SELECT COUNT(id) as cervantes_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Sur' and city =  'Cervantes'");
// $cervantespb = mysqli_fetch_array($cervantes_pb);


// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (sangguniang)
// Sangguniang Barangay Member


$alilem_sbm =  mysqli_query($connect, "SELECT COUNT(id) as alilem_sbm_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'Ilocos Sur' and city =  'Alilem' ");
$alilemsbm = mysqli_fetch_array($alilem_sbm);

$banayoyo_sbm =  mysqli_query($connect, "SELECT COUNT(id) as banayoyo_sbm_cnt from records where Region = 'Region 1'and position = 'Sangguniang Barangay Member' and province = 'Ilocos Sur' and city =  'Banayoyo'");
$banayoyosbm = mysqli_fetch_array($banayoyo_sbm);

$burgos_sbm =  mysqli_query($connect, "SELECT COUNT(id) as burgos_smb_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member'  and province = 'Ilocos Sur' and city =  'Burgos'");
$burgossbm = mysqli_fetch_array($burgos_sbm);

$cabugao_sbm =  mysqli_query($connect, "SELECT COUNT(id) as cabugao_smb_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'Ilocos Sur' and city =  'Cabugao'");
$cabugaosbm = mysqli_fetch_array($cabugao_sbm);

// $cervantes_sbm =  mysqli_query($connect, "SELECT COUNT(id) as cervantes_smb_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'Ilocos Sur' city =  'Cervantes' ");
// $cervantessbm = mysqli_fetch_array($cervantes_sbm);

// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (SK)
// SK Chairperson


$alilem_sk =  mysqli_query($connect, "SELECT COUNT(id) as alilem_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Ilocos Sur' and city =  'Alilem' ");
$alilemsk = mysqli_fetch_array($alilem_sk);

$banayoyo_sk =  mysqli_query($connect, "SELECT COUNT(id) as banayoyo_sk_cnt from records where Region = 'Region 1'and position = 'SK Chairperson'  and province = 'Ilocos Sur' and city =  'Banayoyo' ");
$banayoyosk = mysqli_fetch_array($banayoyo_sk);

$burgos_sk_is =  mysqli_query($connect, "SELECT COUNT(id) as burgos_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Ilocos Sur' and city =  'Burgos'");
$burgossk_is = mysqli_fetch_array($burgos_sk_is);

$cabugao_sk =  mysqli_query($connect, "SELECT COUNT(id) as cabugao_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' and province = 'Ilocos Sur' and city =  'Cabugao'");
$cabugaosk = mysqli_fetch_array($cabugao_sk);


// $cervantes_sk =  mysqli_query($connect, "SELECT COUNT(id) as cervantes_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' and province = 'Ilocos Sur' city =  'Cervantes' ");
// $cervantessk = mysqli_fetch_array($cervantes_sk);


?>
