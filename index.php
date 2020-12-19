<!DOCTYPE html>
<?php include("header.php") ?>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900&display=swap" rel="stylesheet">


</head>

<body>
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_content_inner">
            <div class="home_title"><h1>A complete Hospital Management System</h1></div>
            <div class="home_text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu.</p>
            </div>
            <div class="button home_button">
              <a href="/hms/index.php">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- 2 Boxes section -->

  <div class="boxes">
    <div class="container">
      <div class="row">
        <!-- Box 1-->
        <div class="col-lg-4 box_col">
          <div class="box box_appointments">
            <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 50px; height:50px;"><img src="images/doctor.png" alt=""></div></div>
                <a href="login.php"><div class="box_title">DOCTOR LOGIN</div></a>
          </div>
        </div>

        <!-- Box 2-->
        <div class="col-lg-4 box_col">
          <div class="box box_emergency">
            <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 50px; height:50px; margin-left:-4px;"><img src="images/patient.png" alt=""></div></div>
            <a href="login.php">
            <div class="box_title">USER LOGIN</div></a>
          </div>
        </div>
      </div>
      <div>
        <h4>Not having an account <span><a href="/hms/patient_reg.php">Sign Up</a></span></h4>
      </div>
    </div>
  </div>








<?php include("footer.php")?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
