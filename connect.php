<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body><?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname="hospital";
         $conn =  new mysqli($servername, $username, $password,$dbname);
         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            // echo "connected";
        }

      ?>
   </body>
</html>
