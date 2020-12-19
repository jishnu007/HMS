<!DOCTYPE html>
<?php
session_start();
require_once('connect.php');
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Patient_data</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

  <style >
  *{
    margin: auto;
    padding: auto;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
  }
  body{
    background-color: #d1d1d1;
  }

  table{
    border-collapse: collapse;
    font-size: 0.9em;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: #ffffff  ;
    color:#333333;
    padding-top: 20px;
    padding-bottom: 20px;
  }
  tr{
    text-align: left;
    border: 2px solid black;
  }
  tr:hover {background-color: #6c7ae0;}
  td{
    padding-left: 15px;
    padding-bottom: 15px;
    padding-right: 15px;
    padding-top: 15px;
    border: 2px solid black;
  }

  th{
    text-align: center;
    background-color: #6c7ae0;
    font-size: 14px;
    padding-bottom: 10px;
    padding-top: 10px;
    border: 2px solid black;
    font-weight: 700;
  }

  button {
    background-color: #e7e7e7;
    color: black;
    margin-right: 13px;
    padding: 15px 32px;
    border: 2px solid #4CAF50;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
  }

  button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
  }


  .button1 {
    background-color: #e7e7e7;
    color: black;

    padding: 15px 32px;
    border: 2px solid #f44336;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
  }

  .button1:hover {
    background-color: #f44336;
    color: white;
  }


  </style>






</head>
<body>
  <?php
  $sql = "SELECT * FROM `patient`";
  $records = mysqli_query($conn,$sql); ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>address</th>
      <th>Phone No</th>
      <th>Gender</th>
      <th>DOB</th>
      <th>Email</th>
      <th>Password</th>
      <th>Functions</th>
    </tr>

    <!-- We use while loop to fetch data and display rows of date on html table -->

    <?php

    while ($result = mysqli_fetch_assoc($records)){

      echo "<tr>";

      echo "<td>".$result['id']."</td>";
      echo "<td>".$result['name']."</td>";
      echo "<td>".$result['address']."</td>";
      echo "<td>".$result['phone']."</td>";
      echo "<td>".$result['gender']."</td>";
      echo "<td>".$result['dob']."</td>";
      echo "<td>".$result['email']."</td>";
      echo "<td>".$result['password']."</td>";
      ?>

      <td><div class= "del " ><a href="delete_patient.php?id=<?php echo $result['id'];?>">Delete</a></div>


        <!-- <button type="button" name="edit">EDIT</button><button class ="button1" type="button" name="del">DELETE</button></td>  -->
      </tr>
    <?php }

    ?>

  </table>
</body>
</html>
