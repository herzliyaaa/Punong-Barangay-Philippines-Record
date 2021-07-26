<?php include "../../db_connection.php";

$request=$_REQUEST;
$col =array(
    0 => 'id',
    1 => 'barangay',
    2 => 'position',
    3 => 'last_name',
    4 => 'first_name',
    5 => 'middle_name',
    6 => 'suffix',
    7 => 'email',
    8 => 'barangay_hall_tel_no'
);  //create column like table in database

$sql ="SELECT id, barangay, position, last_name, first_name, middle_name, suffix, email, barangay_hall_tel_no FROM records " ;
$query=mysqli_query($connect,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT id, barangay, position, last_name, first_name, middle_name, suffix, email, barangay_hall_tel_no FROM records WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (id Like '".$request['search']['value']."%' ";
    $sql.=" OR barangay Like '".$request['search']['value']."%' ";
    $sql.=" OR position Like '".$request['search']['value']."%' ";
    $sql.=" OR last_name Like '".$request['search']['value']."%' ";
    $sql.=" OR first_name Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($connect,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($connect,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $id= $row[0];
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //barangay
    $subdata[]=$row[2]; //position
    $subdata[]=$row[3]; //last_name
    $subdata[]=$row[4]; //first_name
    $subdata[]=$row[5]; //middle_name
    $subdata[]=$row[6]; //suffix 
    $subdata[]=$row[7]; //email
    $subdata[]=$row[8]; //barangay_hall_tell_no    
    $subdata[]="<button class=  'view-btn' ><a href=official_details.php?id=$id>view</a></button>" ; 
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>
