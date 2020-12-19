<?php
require_once('connect.php');
$id  = $_GET['id'];
$sql="DELETE FROM `doctor` WHERE id='$id'";
$row = mysqli_query($conn, $sql);
header('location:doctor_details.php');
?>
