<?php
session_start();

// Uncomment and handle session checks if required
// if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
//   header("location: login.php");
//   exit;
// }
// elseif($_SESSION['usertype']== 'student'){
//     header("location: login.php");
//     exit;
// }

include 'partials/_dbconnect.php';

if(isset($_GET['student_sno'])) {
  $t_sno = $_GET['student_sno'];

  $sql = "SELECT * FROM users WHERE S_no = '$t_sno'";
  $result = mysqli_query($conn, $sql);
  $info = $result->fetch_assoc();
}

if(isset($_POST['update_student'])) {
  $S_no = $_POST['sno'];
  $t_name = $_POST['name'];
  $t_pas = $_POST['password'];
  $t_email = $_POST['email'];
  
  $sql2 = "UPDATE users SET username='$t_name', password='$t_pas', email='$t_email' WHERE S_no = '$S_no'";

  $result2 = mysqli_query($conn, $sql2);

  if($result2) {
    header("location:view_teacher.php");
  } else {
    echo "Update failed: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Update Page</title>
  <link rel="stylesheet" href="admin.css">
  <style>
    label {
      display: inline-block;
      width: 150px;
      text-align: right;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .form_deg {
      /* background-color: skyblue; */
      width: 700px;
      padding: 70px 0px;
    }
    .submit {
      padding: 15px 19px;
      color: white;
      background-color: green;
      border-radius: 14px;
      font-size: 15px;
    }
  </style>
</head>
<body>
  <?php include 'admin_nav.php'; ?>
  <div class="container">
    <center>
      <h1>Update Student Data</h1>
      <form class="form_deg" action="#" method="post" enctype="multipart/form-data">
        <input type="hidden" name="sno" value="<?php echo $info['S_no']; ?>">

        <div>
          <label for="name">User Name</label>
          <input type="text" name="name" value="<?php echo $info['username']; ?>">
        </div>
        <div>
          <label for="description">Password</label>
          <input type="password" name="password" value="<?php echo $info['password']; ?>">
        </div>
        <div>
          <label for="email">Edit Email</label>
          <input type="email" name="email" value="<?php echo $info['email']; ?>">
        </div>
        <div>
          <input class="submit" type="submit" name="update_student" value="Update Student Details">
        </div>
      </form>
    </center>
  </div>
</body>
</html>
