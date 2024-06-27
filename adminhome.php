<?php
// session_start();

// if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
//   header("location: login.php");
//   exit;
// }
// elseif($_SESSION['usertype']== 'student'){
//     header("location: login.php");
//     exit;
// }


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login page </title>
  <link rel="stylesheet" href="admin.css">

</head>
<body>
  <?php  include 'admin_nav.php'  ?>
  <div class="container">
    Admin
  </div>

</body>
</html>