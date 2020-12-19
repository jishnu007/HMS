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
  <title>DOCTOR-Dashboard</title>
  <style media="screen">
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
  }

  .boxes
  {
    width: 100%;
    background: transparent;
    z-index: 10;
    padding-bottom: 35px;
  }
  .box_col
  {
    margin-top: 20px;
  }
  .box
  {
    width: 100%;
    height: 250px;
    background: #283290;
    padding-left: 42px;
    padding-top: 29px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
  }
  .box::after
  {
    display: block;

    left: 0;
    bottom: 0;
    width: 100%;
    height: 4px;
    background: #20d34a;
    content: '';
  }
  .box:hover
  {
    box-shadow: 0px 15px 49px rgba(0,0,0,0.59);
  }
  .box_title
  {
    font-size: 34px;
    font-weight: 500;
    color: #FFFFFF;
    margin-top: 11px;
  }

  .box_icon
  {
    width: 37px;
    height: 37px;
  }
  .box_icon img
  {
    max-width: 100%;
  }
  .box-text
  {
    font-size: 22px;
    line-height: 2.14;
    color: #FFFFFF;
    font-weight: 400;
    margin-top: 23px;
  }
  .box_phone
  {
    font-size: 30px;
    font-weight: 400;
    color: #20d34a;
    margin-top: 20px;
  }
  .box_appointments
  {
    margin-left:400px;
    padding-right: 30px;
  }
  .box_emergency
  {
    padding-right: 30px;
  }
  .box_emergency_text
  {
    font-size: 14px;
    line-height: 2.14;
    color: #FFFFFF;
    font-weight: 400;
    margin-top: 18px;
  }
  .form-group{
    width: 400px;
  }


  .profile-card{
		width: 300px;
		border-radius: 2px;
		overflow: hidden;
		box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
		position: relative;
		background: rgba(255,255,255,1);
    float: left;

	}

	.profile-card header{
		display: block;

		background: rgba(255,255,255,1);
		text-align: center;
		padding: 30px 0 20px;
		z-index: 1;
		overflow: hidden;
	}

	.profile-card header:before{
		content: "";
		position: absolute;
		background: url('http://ali.shahab.pk/blur.php?img=http://ali.shahab.pk/ali-shahab.jpg&x=60') no-repeat;
		background-size: cover;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		z-index: -1;

	}

	.profile-card header:after{
		content: "";
		position: absolute;
		bottom: -1px;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		background-image: linear-gradient(
		    to bottom,
		    rgba(255, 255, 255, 0) 0%,
		    rgba(255, 255, 255, 1) 100%
		);
	}

	.profile-card header img{
		border-radius: 100%;
		overflow: hidden;
		width: 150px;
		/*border: 1px solid rgba(255,255,255,.5);*/
		box-shadow: 0 1px 0 rgba(0,0,0,.1),0 1px 2px rgba(0,0,0,.1);
	}

	.profile-card header h1{
    text-transform: uppercase;
		font-weight: 700;
		font-size: 56px;
		color: #444;
		letter-spacing: -3px;
		margin: 0;
		padding: 0;
	}
  .profile-card header p{
    padding-top:50px;

    font-size: 14px;
    color: #444;

    margin: 0;
    padding: 0;
  }

	.profile-card header h2{
    text-transform: uppercase;
		font-weight: 400;
		font-size: 34px;
		color: #666;
		letter-spacing: .5px;
		margin: 0;
		padding: 0;
	}
  .profile-card header h3{
    font-weight: 200;
    font-size: 18px;
    color: #444;

    margin: 0;
    padding: 0;
  }

  </style>
</head>


<body>
  <?php
  $id = $_SESSION["doc_id"];
  $result = "SELECT * FROM `doctor` where id=$id";
  $row = mysqli_query($conn, $result);
  $row1 = mysqli_fetch_assoc($row);
  ?>

<div class="container">


  <aside class="profile-card">

    <header>

      <!-- here’s the avatar -->
      <!-- <a href="#">
        <img src="http://gravatar.com/avatar/eb2d48c7f2cf027bb4cb20483e27c9c9?size=200px">
      </a> -->

      <!-- the username -->
      <h1><?php echo $row1["name"];?></h1>

      <!-- and role or location -->
      <h2><?php echo $row1["specialization"];?></h2>
      <h3>Address:<?php echo $row1["address"];?></h3>
      <h3>Phone:<?php echo $row1["phone"];?></h3>
        <p><a href="edit_doctor.php">
      Edit My Profile
      </a></p>
    </header>

  </aside>




          <div class="col-lg-4 box_col">
            <div class="box box_appointments" >
              <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 50px; height:50px;"><img src="images/doctor.png" alt=""></div></div>
              <a href="patient_details.php">
                <div class="box_title">PATIENT DETAILS</div></a>
              </div>
            </div>
          </div>

  </div>
    </body>
    </html>
