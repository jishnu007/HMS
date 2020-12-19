<!DOCTYPE html>
<?php
require_once('connect.php');
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <title>Patient Registration</title>
  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
  }
  .container{
    margin-top: 150px;
    width:400px;
    margin-left: auto;
    margin-right: auto;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <img src="images/service-bg.png" alt="" class="card-img-top">
      <form method="post" onsubmit="return checkpass(this)" enctype="multipart/form-data" action="">
        <div class="form-group" enctype="multipart/form-data">
          <label>Name:</label>
          <input type="name" class="form-control" name="name"  placeholder=" Name" required>
        </div>

        <div class="form-group" required>
          <label>Address:</label>
          <input type="textarea" name="address" class="form-control" placeholder="Address">
        </div>
        <div class="form-group">
          <label>Phone:</label>
          <input type="number" name= "phone" class="form-control"  placeholder="Phone"required>
        </div>
        <div class="form-group" required>
          <label>Gender:</label>
          <?php echo "<br>"?>
          <input type="radio"  name="gender" value="Male">Male
          &nbsp;&nbsp;
          <input type="radio"  name="gender" value="Female">Female
        </div>
        <div class="form-group">
          <label>Date of Birth:</label>
          <input type="date" class="form-control" name="date" required >
        </div>

        <div class="form-group">
          <label>Email:</label>
          <input type="email" name= "email" class="form-control" placeholder=" Email"required>
        </div>

        <div class="form-group">
          <label>Password:</label>
          <input type="password" name= "password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label>Confirm Password:</label>
          <input type="password" name= "cpassword" class="form-control" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
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

    $p_name=$_POST["name"];
    $p_address=$_POST["address"];
    $p_phone=$_POST["phone"];
    $p_gender=$_POST["gender"];
    $p_dob=$_POST["date"];
    $p_email=$_POST["email"];
    $p_password=$_POST["password"];
    $sql="INSERT INTO `patient` (`name`, `address`, `phone`, `gender`, `dob`, `email`, `password`)
    VALUES ('$p_name', '$p_address','$p_phone','$p_gender','$p_dob','$p_email','');";

    // $result =mysqli_query($conn,$sql);

    if ($conn->query($sql) === TRUE) {
					 $last_id = $conn->insert_id;
    				// echo "New record created successfully";
				} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$sql = "INSERT INTO `login`(`username`, `password`, `login_id`) VALUES ('$p_email', '$p_password', '$last_id')";
				if ($conn->query($sql) === TRUE) {
    				// echo "New record created successfully";
				} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
				}
    header('location:index.php');
  }
  ?>
</body>
</html>
