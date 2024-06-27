<?php
session_start();
include 'partials/_dbconnect.php';

// if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
//   header("location: login.php");
//   exit;
// }
// elseif($_SESSION['usertype'] == 'student'){
//     header("location: login.php");
//     exit;
// }


if(isset($_POST['add_teacher'])){

    $t_name = $_POST['name'];
    $t_description= $_POST['description'];
    $file = $_FILES['image']['name'];
    $dst = "./image/".$file;
    $dst_db = "image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $sql ="INSERT INTO `teacher` (`name`, `description`,`image`) VALUES ('$t_name', '$t_description',' $dst_db');";

    $result=mysqli_query($conn , $sql);

    if($result){
      header('location:add_teacher.php');
    }


}
?>

<style type="text/css">

label{
    display: inline-block;
    text-align: right;
    width: 106px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.div_deg{
    background-color: skyblue;
    width: 500px;
    padding-top: 70px;
    padding-bottom: 70px;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">

 <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

</head>
<body>
<?php
   include 'admin_nav.php';
 ?>

    <div class="content">
      <center>
        <H1>Add Teacher</H1><br><br>

        <div class="div_deg">
          <form action="#" method="POST" enctype="multipart/form-data">
            <div>
              <label>Teacher Name : </label>
              <input type="text" name="name">
            </div>
            <br> 
            <div>
              <label>Description : </label>
             <textarea name="description"></textarea>
            </div>
            <br>
            <div>
              <label>  Image: </label>
              <input type="file" name="image">
            </div>
            <br>
            <div>
              <input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-primary">
            </div>
          </form>
        </div>
      </center>
    </div>

</body>
</html>
</body>
</html>