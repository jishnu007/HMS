<!DOCTYPE html>
<?php
require_once('connect.php');
include("header.php");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>ADMIN-Dashboard</title>
    <style media="screen">
    .boxes
    {
      width: 100%;
      background: transparent;
      z-index: 10;
      padding-bottom: 35px;
    }
    .box_col
    {
      margin-top: 40px;
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
      position: absolute;
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
      font-size: 28px;
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
    .box_text
    {
      font-size: 14px;
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

    </style>
  </head>


  <body>

    

    <div class="boxes">
      <div class="container">
        <div class="row">
          <!-- Box 1-->

          <div class="col-lg-4 box_col">
            <div class="box box_appointments" >
              <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 50px; height:50px;"><img src="images/doctor.png" alt=""></div></div>
              <a href="doctor_details.php">
              <div class="box_title">DOCTOR DETAILS</div></a>
            </div>
          </div>



          <div class="col-lg-4 box_col">
            <div class="box box_appointments" >
              <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 50px; height:50px;"><img src="images/doctor.png" alt=""></div></div>
              <a href="patient_details.php">
              <div class="box_title">PATIENT DETAILS</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
