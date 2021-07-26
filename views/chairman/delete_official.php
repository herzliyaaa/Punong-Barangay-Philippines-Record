<?php
include "../../db_connection.php";

$id= $_GET['id'];
 $sql = mysqli_query($connect,"DELETE FROM `records` WHERE id = $id");
 header("location: officials_directory.php");
?>