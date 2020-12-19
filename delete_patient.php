<?php
require_once('connect.php');
$id  = $_GET['id'];
$sql="DELETE FROM `patient` WHERE id='$id'";
$row = mysqli_query($conn, $sql);
header('location:patient_details.php');
?>
