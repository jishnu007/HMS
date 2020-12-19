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
    <title>Edit Your Profile</title>
    <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Raleway', sans-serif;
      font-weight: 400;
    }

    </style>
  </head>
  <body>
    <?php
      $id  = $_SESSION['doc_id'];
      $sql = "SELECT * FROM `doctor` where id=$id";
      $records = mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($records);


      ?>
  <div class="container" style="  margin-top: 150px;
    width:400px;
    margin-left: auto;
    margin-right: auto;">

    <div class="card">
    <h2>EDIT YOUR DETAILS</h2>
    <img src="images/service-bg.png" alt="" class="card-img-top">
    <form method="post" onsubmit="return checkpass(this)" enctype="multipart/form-data">

      <div class="form-group">
        <label>Name:</label>
        <input type="name" class="form-control" name="name"  placeholder=" Name"  value="<?php echo $row['name'] ?>" required>
      </div>

      <div class="form-group">
         <label>Specialization:</label>
         <select class="form-control" name="spec">
           <option value="cardio">CARDIO</option>
           <option value="dentist">DENTIST</option>
            <option value="ortho">ORTHO</option>
              <option value="allergist">ALLERGIST</option>
         </select>
       </div>
      <div class="form-group" required>
        <label>Address:</label>
        <input type="textarea" name= "address" class="form-control" value="<?php echo $row['address'] ?>" placeholder="Address">
      </div>
      <div class="form-group">
        <label>Phone:</label>
        <input type="number" name= "phone" class="form-control"  placeholder="Phone" value="<?php echo $row['phone'] ?>" required>
      </div>
      <div class="form-group"  required>
        <label>Gender:</label>
        <?php echo "<br>"?>
        <input type="radio"  name="gender" value="Male">Male
        &nbsp;&nbsp;
        <input type="radio"  name="gender" value="Female">Female
      </div>
      <div class="form-group">
        <label>Date of Birth:</label>
        <input type="date" class="form-control" name="date" value="<?php echo $row['dob'] ?>" required >
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name= "email" class="form-control" placeholder=" Email" value="<?php echo $row['email'] ?>" required>
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name= "password" class="form-control" placeholder="Password" value="<?php echo $row['password'] ?>" required>
      </div>
      <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" name= "cpassword" class="form-control" required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>


    <!-- Password validation-->
    <script type="text/javascript">
            function checkpass(form)
              {
                password1=form.password1.value;
                password2=form.password2.value;

                if (password1 == '') {
                  alert ("Enter Password");
                  return false;
                }
                else if (password2 == '') {
                  alert ("Enter Confirm Password");
                  return false;
                }
                else if (password1 != password2) {
                  alert ("Mismatch");
                  return false;
                }
                else{
                  return true;
                }
              }
          </script>

  <!-- Password validation end-->
  <?php
  if (isset($_POST['submit'])) {
        echo "abc";
    $id  = $_REQUEST['doc_id'];
    $d_name=$_POST["name"];
    $spec=$_POST["spec"];
    $d_address=$_POST["address"];
    $d_phone=$_POST["phone"];
    $d_gender=$_POST["gender"];
    $d_dob=$_POST["date"];
    $d_email=$_POST["email"];
    $d_password=$_POST["password"];

    $query="UPDATE `doctor` SET name='$d_name', email='$d_email',gender='$d_gender',dob='$d_dob',specialization='$spec',password='$d_password',phone='$d_phone',address='$d_address'  WHERE id='$id';";
    $row = mysqli_query($conn, $query);
    header('location:doctor_dashboard.php');

}

?>
