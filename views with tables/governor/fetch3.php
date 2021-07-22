<?php
$con=mysqli_connect('localhost','root','','phbarangay')
    or die("connection failed".mysqli_errno($sql));

$request=$_REQUEST;
$col =array(
    0 => 'id',
    1 => 'province',
    2 => 'city',
    3 => 'barangay',
    4 => 'position',
    5 => 'last_name',
    6 => 'first_name',
    7 => 'middle_name',
    8 => 'suffix',
    9 => 'email',
    10 => 'barangay_hall_tel_no'
);  //create column like table in database

$sql ="SELECT id, province, city, barangay, position, last_name, first_name, middle_name, suffix, email, barangay_hall_tel_no FROM records " ;
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT id, province, city, barangay, position, last_name, first_name, middle_name, suffix, email, barangay_hall_tel_no FROM records WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (id Like '".$request['search']['value']."%' ";
    $sql.=" OR province Like '".$request['search']['value']."%' ";
    $sql.=" OR city Like '".$request['search']['value']."%' ";
    $sql.=" OR barangay Like '".$request['search']['value']."%' ";
    $sql.=" OR position Like '".$request['search']['value']."%' ";
    $sql.=" OR last_name Like '".$request['search']['value']."%' ";
    $sql.=" OR first_name Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($con,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //province
    $subdata[]=$row[2]; //city
    $subdata[]=$row[3]; //barangay
    $subdata[]=$row[4]; //position
    $subdata[]=$row[5]; //last_name
    $subdata[]=$row[6]; //first_name
    $subdata[]=$row[7]; //middle_name
    $subdata[]=$row[8]; //suffix 
    $subdata[]=$row[9]; //email
    $subdata[]=$row[10]; //barangay_hall_tell_no    
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
