<?php
session_start();

include 'admin_nav.php';
include 'partials/_dbconnect.php';

// Fetch all users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (isset($_GET['student_id'])) {
    $t_id = $_GET['student_id'];
    $sql2 = "DELETE FROM users WHERE S_no='$t_id'";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        header('location:view_student.php');
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
    .updateButton {
      padding: 12px;
      background-color: green;
      border-radius: 12px;
    }
  </style>
</head>
<body>
  <div class="container">
    <center>
      <h1>View All Student Data</h1>
      <table>
        <tr>
          <th class="table_th">Student Id</th>
          <th class="table_th">Student Email</th>
          <th class="table_th">Student Password</th>
          <th class="table_th">Delete</th>
        
        </tr>
        <?php while($info = $result->fetch_assoc()) { ?>
          <?php if ($info["usertype"] == "student") { ?>
            <tr>
              <td class="table_td">
                <?php echo $info["username"]; ?>
              </td>
              <td class="table_td">
                <?php echo $info["email"]; ?>
              </td>
              <td class="table_td">
                <?php echo $info["password"]; ?>
              </td>
              <td class="table_td">
                <a class='deleteButton' href='view_student.php?student_id=<?php echo $info["S_no"]; ?>' onclick="return confirm('Are you sure you want to delete this?');">Delete</a>
              </td>
              
            </tr>
          <?php } ?>
        <?php } ?>
      </table>
    </center>
  </div>
</body>
</html>
