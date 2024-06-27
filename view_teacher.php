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

$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn, $sql);

if (isset($_GET['teacher_id'])) {
    $t_id = $_GET['teacher_id'];
    $sql2 = "DELETE FROM teacher WHERE sno='$t_id'";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        header('location:view_teacher.php');
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
  </style>
</head>
<body>
  <div class="container">
    <center>
      <h1>View All Teacher Data</h1>
      <table>
        <tr>
          <th class="table_th">Teacher Name</th>
          <th class="table_th">About Teacher</th>
          <th class="table_th">Image</th>
          <th class="table_th">Delete</th>
        </tr>
        <?php while($info = $result->fetch_assoc()) { ?>
        <tr>
          <td class="table_td">
            <?php echo $info["name"]; ?>
          </td>
          <td class="table_td">
            <?php echo $info["description"]; ?>
          </td>
          <td class="table_td">
            <img style="width: 100px; height: 100px;" src="<?php echo $info['image']; ?>">
          </td>

          <td class="table_td">
                <a class='deleteButton' href='view_teacher.php?teacher_id=<?php echo $info["sno"]; ?>' onclick="return confirm('Are you sure you want to delete this?');">Delete</a>
            </td>

           


        </tr>
        <?php } ?>
      </table>
    </center>
  </div>
  

</body>
</html>
