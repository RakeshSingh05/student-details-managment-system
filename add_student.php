<?php 
include 'partials/_dbconnect.php'; 

if(isset($_POST['add_student'])){
  $username = $_POST['name'];
  $user_password = $_POST['password'];
  $usertype = "student";
  $user_email = $_POST['email'];

  $check = "SELECT * FROM users WHERE username = '$username'";
  $check_user = mysqli_query($conn, $check);

  $row_count = mysqli_num_rows($check_user);

  if($row_count == 1){
    echo "<script type='text/javascript'>
    alert('Username Already Exists. Try another one!'); 
    </script>";
  } else {
    $sql = "INSERT INTO `users` (`username`, `password`, `usertype`, `email`, `dt`) VALUES ('$username', '$user_password', '$usertype', '$user_email', current_timestamp());"; 
    $result = mysqli_query($conn, $sql);

    if($result){
      echo "<script type='text/javascript'>
      alert('Data Uploaded Successfully'); 
      </script>";
    } else {
      echo "Uploading failed";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login page</title>
  <link rel="stylesheet" href="admin.css">
  <style>
    label {
      display: inline-block;
      text-align: right;
      width: 100px;
      padding: 10px 0px;
    }
    .addStudent {
      margin-left: 35px;
      padding: 5px 10px;
      text-align: center;
      background-color: red;
      border-radius: 5px;
    }
    .bodypart {
      background-color: skyblue;
      width: 500px;
      border-radius: 5px;
      padding: 25px;
    }
    .student{
      padding:15px;
      font-size:35px;

    }
  </style>
</head>
<body>
  <?php include 'admin_nav.php'; ?>
    
  <center>
    <div class="container">
      <h3  class="student">Add Student</h3> 
      <div class="bodypart">
        <div>
          <form action="#" method="post">
            <div>
              <label>Username</label>
              <input type='text' name='name' required>
            </div>
            <div>
              <label>Email</label>
              <input type='email' name='email' required>
            </div>
            <div>
              <label>Password</label>
              <input type='password' name='password' required>
            </div>
            <div>
              <input type='submit' class="addStudent" name='add_student' value="ADD STUDENT">
            </div>
          </form>
        </div>
      </div>
    </div>
  </center>
</body>
</html>
