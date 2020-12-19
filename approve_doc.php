<?php
require_once('connect.php');
$id  = $_REQUEST['id'];
$status='YES';
$sql="UPDATE `login` SET `approval`='$status' WHERE login_id='$id'";
$row = mysqli_query($conn, $sql);
$sql="UPDATE `doctor` SET `approval`='$status' WHERE id='$id'";
$row = mysqli_query($conn, $sql);
header('location:doctor_details.php');
?>
