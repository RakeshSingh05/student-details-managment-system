<?php
// session_start();

// if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
//   header("location: login.php");
//   exit;
// }
// elseif($_SESSION['usertype']== 'admin'){
//   header("location: login.php");
//   exit;
// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login page </title>
  <link rel="stylesheet" href="admin.css">
  <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body>
  <header class="header" >
  <a href="" text-decoration="none"> Student Dash Board</a>
  <div class="logout"> 
  <a href="login.php" > logout</a>
  </div>
</header>
<aside>
  <ul>
    <li>
      <a href="">My Courses</a>
    </li>
    <li>
      <a href="myResultOfSemester.php">My Result</a>
    </li>
    
  </ul>
</aside>
<div class="container">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis iste dolorem voluptatum aperiam minus modi libero eum, quidem rem quia neque sequi? Magni maiores, dignissimos ipsa ad rerum pariatur  loremem555 </p></div>
</div>
</body>
</html>