<!DOCTYPE html>
<?php
require_once('connect.php');
include("header.php");
session_start();
 ?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <title>Login</title>

</head>
<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
}




</style>
<body>
  <div class="container" style="  margin-top: 150px;
    width:400px;
    margin-left: auto;
    margin-right: auto;">
    <div class="card">
      <img src="images/service-bg.png" alt="" class="card-img-top">
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="Email">Email address:</label>
            <input type="email" class="form-control" name="email"  placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
             <label for="sel1">Select Your Role:</label>
             <select class="form-control" name="role">
               <option value="doctor">DOCTOR</option>
               <option value="patient">PATIENT</option>
             </select>
           </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>



  <?php
  if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $uemail = mysqli_real_escape_string($conn, $_POST['email']);
      $upassword = mysqli_real_escape_string($conn, $_POST['password']);

      $role=mysqli_real_escape_string($conn, $_POST['role']);
      if($role=="doctor"){

        $em = "SELECT id FROM `doctor` where email = '$uemail' and password='$upassword'";
        echo $em;
        $result = mysqli_query($conn, $em);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
          $_SESSION['doc_id'] = $row['id'];
          echo "thats good";
          header('location:doctor_dashboard.php');
        } else {
          echo "bad";
        }
        }
        if($role=="patient"){
          $em = "SELECT id FROM `patient` where email = '$uemail' and password='$upassword'";
          echo $em;
          $result = mysqli_query($conn, $em);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $count = mysqli_num_rows($result);

          if ($count == 1) {
            $_SESSION['pat_id'] = $row['id'];
            echo "thats good";
            header('location:patient_dashboard.php');
          } else {
            echo "bad";
          }
          }
    }
  }
?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
