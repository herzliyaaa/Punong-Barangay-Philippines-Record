<?php include "../../db_connection.php"; ?>

<?php


// Region 1 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (punong barangay)


$ilocos_n_pb =  mysqli_query($connect,"SELECT COUNT(id) as in_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Norte'");
$in = mysqli_fetch_array($ilocos_n_pb);

$ilocos_s_pb =  mysqli_query($connect,"SELECT COUNT(id) as is_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Ilocos Sur'");
$is = mysqli_fetch_array($ilocos_s_pb);

$pangasinan_pb =  mysqli_query($connect,"SELECT COUNT(id) as pa_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'Pangasinan'");
$pa = mysqli_fetch_array($pangasinan_pb);

$la_union_pb =  mysqli_query($connect,"SELECT COUNT(id) as la_pb_cnt from records where Region = 'Region 1' and position = 'Punong Barangay' and province = 'La Union'");
$la = mysqli_fetch_array($la_union_pb);




// Region 1 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (sangguniang)
// Sangguniang Barangay Member


$ilocos_n_sbm =  mysqli_query($connect,"SELECT COUNT(id) as a_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'Ilocos Norte' ");
$a = mysqli_fetch_array($ilocos_n_sbm);

$ilocos_s_sbm =  mysqli_query($connect,"SELECT COUNT(id) as b_cnt from records where Region = 'Region 1'and position = 'Sangguniang Barangay Member'  and province = 'Ilocos Sur'");
$b = mysqli_fetch_array($ilocos_s_sbm);

$pangasinan_sbm =  mysqli_query($connect,"SELECT COUNT(id) as c_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member'  and province = 'Pangasinan'");
$c = mysqli_fetch_array($pangasinan_sbm);

$la_union_sbm =  mysqli_query($connect,"SELECT COUNT(id) as d_cnt from records where Region = 'Region 1' and position = 'Sangguniang Barangay Member' and province = 'La Union' ");
$d = mysqli_fetch_array($la_union_sbm);



// Region 1 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (SK)
// SK Chairperson


$ilocos_n_sk =  mysqli_query($connect,"SELECT COUNT(id) as ilocos_n_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Ilocos Norte' ");
$e = mysqli_fetch_array($ilocos_n_sk);

$ilocos_s_sk =  mysqli_query($connect,"SELECT COUNT(id) as ilocos_s_sk_cnt from records where Region = 'Region 1'and position = 'SK Chairperson'  and province = 'Ilocos Sur' ");
$f = mysqli_fetch_array($ilocos_s_sk);

$pangasinan_sk =  mysqli_query($connect,"SELECT COUNT(id) as pangasinan_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson'  and province = 'Pangasinan'");
$g = mysqli_fetch_array($pangasinan_sk);

$la_union_sk =  mysqli_query($connect,"SELECT COUNT(id) as la_union_sk_cnt from records where Region = 'Region 1' and position = 'SK Chairperson' and province = 'La Union'");
$h = mysqli_fetch_array($la_union_sk);




?>


<?php


// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (punong barangay)


$cagayan_pb =  mysqli_query($connect,"SELECT COUNT(id) as cagayan_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Cagayan'");
$cagpb = mysqli_fetch_array($cagayan_pb);

$quirino_pb =  mysqli_query($connect,"SELECT COUNT(id) as quirino_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Quirino'");
$qupb = mysqli_fetch_array($quirino_pb);

$nv_pb =  mysqli_query($connect,"SELECT COUNT(id) as nv_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Nueva Vizcaya'");
$nvpb = mysqli_fetch_array($nv_pb);

$isabela_pb =  mysqli_query($connect,"SELECT COUNT(id) as isabela_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Isabela'");
$isabelapb = mysqli_fetch_array($isabela_pb);

$batanes_pb =  mysqli_query($connect,"SELECT COUNT(id) as batanes_pb_cnt from records where Region = 'Region 2' and position = 'Punong Barangay' and province = 'Batanes'");
$batanespb = mysqli_fetch_array($batanes_pb);


// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (sangguniang)
// Sangguniang Barangay Member


$cagayan_sbm =  mysqli_query($connect,"SELECT COUNT(id) as cagayan_sbm_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member' and province = 'Cagayan' ");
$cagsbm = mysqli_fetch_array($cagayan_sbm);

$quirino_sbm =  mysqli_query($connect,"SELECT COUNT(id) as quirino_sbm_cnt from records where Region = 'Region 2'and position = 'Sangguniang Barangay Member'  and province = 'Quirino'");
$qusbm = mysqli_fetch_array($quirino_sbm);

$nv_sbm =  mysqli_query($connect,"SELECT COUNT(id) as nv_smb_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member'  and province = 'Nueva Vizcaya'");
$nvsbm = mysqli_fetch_array($nv_sbm);

$isabela_sbm =  mysqli_query($connect,"SELECT COUNT(id) as isabela_smb_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member' and province = 'Isabela' ");
$isabelasbm = mysqli_fetch_array($isabela_sbm);

$batanes_sbm =  mysqli_query($connect,"SELECT COUNT(id) as batanes_smb_cnt from records where Region = 'Region 2' and position = 'Sangguniang Barangay Member' and province = 'Batanes' ");
$batanessbm = mysqli_fetch_array($batanes_sbm);

// Region 2 POPULATION COUNT OF BRGY OFFICIALS ACCORDING TO ITS POSITIONS (SK)
// SK Chairperson


$cagayan_sk =  mysqli_query($connect,"SELECT COUNT(id) as cagayan_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson'  and province = 'Cagayan' ");
$cagsk = mysqli_fetch_array($cagayan_sk);

$quirino_sk =  mysqli_query($connect,"SELECT COUNT(id) as quirino_sk_cnt from records where Region = 'Region 2'and position = 'SK Chairperson'  and province = 'Quirino' ");
$qusk = mysqli_fetch_array($quirino_sk);

$nv_sk =  mysqli_query($connect,"SELECT COUNT(id) as nv_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson'  and province = 'Nueva Vizcaya'");
$nvsk = mysqli_fetch_array($nv_sk);

$isabela_sk =  mysqli_query($connect,"SELECT COUNT(id) as isabela_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson' and province = 'Isabela'");
$isabelask = mysqli_fetch_array($isabela_sk);


$batanes_sk =  mysqli_query($connect,"SELECT COUNT(id) as batanes_sk_cnt from records where Region = 'Region 2' and position = 'SK Chairperson' and province = 'Batanes'");
$batanessk = mysqli_fetch_array($batanes_sk);


?>




<?php

// POPULATION COUNT OF BRGY OFFICIALS
$is_region1 =  mysqli_query($connect,"SELECT COUNT(id) as is_cnt from records where Region = 'Region 1' and province = 'Ilocos Sur'");
$is_count = mysqli_fetch_array($is_region1);

$in_region1 =  mysqli_query($connect,"SELECT COUNT(id) as in_cnt from records where Region = 'Region 1' and province = 'Ilocos Norte'");
$in_count = mysqli_fetch_array($in_region1);

$pa_region1 =  mysqli_query($connect,"SELECT COUNT(id) as pa_cnt from records where Region = 'Region 1' and province = 'Pangasinan'");
$pa_count = mysqli_fetch_array($pa_region1);

$la_region1 =  mysqli_query($connect,"SELECT COUNT(id) as la_cnt from records where Region = 'Region 1' and province = 'La Union'");
$la_count = mysqli_fetch_array($la_region1);


// POPULATION COUNT OF BRGY OFFICIALS
$cagayan_region2 =  mysqli_query($connect,"SELECT COUNT(id) as cag_cnt from records where Region = 'Region 2' and province = 'Cagayan' ");
$cag_count = mysqli_fetch_array($cagayan_region2);

$quirino_region2 =  mysqli_query($connect,"SELECT COUNT(id) as qu_cnt from records where Region = 'Region 2' and province = 'Quirino'");
$qu_count = mysqli_fetch_array($quirino_region2);

$nv_region2 =  mysqli_query($connect,"SELECT COUNT(id) as nv_cnt from records where Region = 'Region 2' and province = 'Nueva Vizcaya'");
$nv_count = mysqli_fetch_array($nv_region2);


$isabela_region2 =  mysqli_query($connect,"SELECT COUNT(id) as isabela_cnt from records where Region = 'Region 2' and province = 'Isabela'");
$isabela_count = mysqli_fetch_array($isabela_region2);


$batanes_region2 =  mysqli_query($connect,"SELECT COUNT(id) as batanes_cnt from records where Region = 'Region 2' and province = 'Batanes' ");
$batanes_count = mysqli_fetch_array($batanes_region2);




?>