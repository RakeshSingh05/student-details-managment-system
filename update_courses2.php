<?php
session_start();

// if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
//   header("location: login.php");
//   exit;
// }
// elseif($_SESSION['usertype']== 'student'){
//     header("location: login.php");
//     exit;
// }
include 'admin_nav.php';
include 'partials/_dbconnect.php';

$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login page</title>
  <link rel="stylesheet" href="admin.css">
  <style>
   
    .table_th {
      padding: 20px;
      font-size: 20px;
      /* margin-right:22px; */
    }
    .table_td {
      padding: 20px;
      /* background-color: skyblue; */
    }
    a {
      text-decoration: none;
      font-family: 'Times New Roman', Times, serif;
      font-size: 600;
      color: #fff;
    }
    .deleteButton {
      padding: 12px;
      background-color: red;
      border-radius: 12px;
    }

    .updateButton{
      padding: 12px;
      background-color: green;
      border-radius: 12px;

    }
    .container{
      margin-right:3%;
    }
  </style>
</head>
<body>
  <div class="container">
    <center>
      <h1>View All Course Data </h1>
      <table>
        <tr>
          <th class="table_th">Course Name</th>
          <th class="table_th">Duration</th>
          <th class="table_th">Banner</th>
          <th class="table_th">Description</th>
          <th class="table_th">Update</th>
        </tr>
        <?php while($info = $result->fetch_assoc()) { ?>
        <tr>
          <td class="table_td">
            <?php echo $info["course_type"]; ?>
          </td>
          <td class="table_td">
            <?php echo $info["duration"]; ?>
          </td>
          <td class="table_td">
            <img style="width: 100px; height: 100px;" src="<?php echo $info['image']; ?>">
          </td>
          <td class="table_td">
            <?php echo $info["Descriptions"]; ?>
          </td>

         

            <td class="table_td">
                <a class='updateButton' href='update_courses.php?course_sno=<?php echo $info["sno"]; ?>'>update</a>
            </td>


        </tr>
        <?php } ?>
      </table>
    </center>
  </div>
  

</body>
</html>
