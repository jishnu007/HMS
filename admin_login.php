<!DOCTYPE html>
<?php
  session_start();
  require_once('connect.php');
?>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <title>Admin-Login</title>

</head>
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
<body>
  <div class="container">
    <div class="card">
      <img src="images/service-bg.png" alt="" class="card-img-top">
      <div class="card-body">


        <form method="post">
          <div class="form-group">
            <label for="Username">Username:</label>
            <input type="username" class="form-control" name="username"  placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

<?php
  if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $uname = mysqli_real_escape_string($conn, $_POST['username']);
      $upassword = mysqli_real_escape_string($conn, $_POST['password']);


      $em = "SELECT id FROM `admin` where username = '$uname' and password='$upassword'";
      echo $em;
      $result = mysqli_query($conn, $em);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if ($count == 1) {
        // $_SESSION['login_id'] = $row['login_id'];
        echo "thats good";
        header('location:admin_dashboard.php');
      } else {
        echo "bad";
      }
    }
  }

?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
