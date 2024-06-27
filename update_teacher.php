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

if(isset($_GET['teacher_sno'])) {
  $t_sno = $_GET['teacher_sno'];

  $sql = "SELECT * FROM teacher WHERE sno = '$t_sno'";
  $result = mysqli_query($conn, $sql);
  $info = $result->fetch_assoc();
}

if(isset($_POST['update_teacher'])) {
  $sno = $_POST['sno'];
  $t_name = $_POST['name'];
  $t_des = $_POST['description'];
  
  if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
    $file = $_FILES['image']['name'];
    $dst = "./image/".$file;
    $dst_db = "image/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst);

    $sql2 = "UPDATE teacher SET name='$t_name', description='$t_des', image='$dst_db' WHERE sno = '$sno'";
  } else {
    $sql2 = "UPDATE teacher SET name='$t_name', description='$t_des' WHERE sno = '$sno'";
  }

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
      <h1>Update Teacher Data</h1>
      <form class="form_deg" action="#" method="post" enctype="multipart/form-data">
        <input type="hidden" name="sno" value="<?php echo $info['sno']; ?>">

        <div>
          <label for="name">Teacher Name</label>
          <input type="text" name="name" value="<?php echo $info['name']; ?>">
        </div>
        <div>
          <label for="description">About Teacher</label>
          <textarea name="description"><?php echo $info['description']; ?></textarea>
        </div>
        <div>
          <label for="old_image">Teacher Old Image</label>
          <img src="<?php echo $info['image']; ?>" alt="" width="100" height="100">
        </div>
        <div>
          <label for="image">Teacher New Image</label>
          <input type="file" name="image">
        </div>
        <div>
          <input class="submit" type="submit" name="update_teacher" value="Update Teacher">
        </div>
      </form>
    </center>
  </div>
</body>
</html>
