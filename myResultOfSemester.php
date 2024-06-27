<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result of Student</title>
  <style>
    input {
      width: 294px;
    }
    select {
      width: 349px;
    }
    input, select {
      padding: 25px;
      font-size: 18px;
      margin-top: 9px;
      border-radius: 18px;
    }
  </style>
</head>
<body>
  <link rel="stylesheet" href="admin.css">
  <header class="header">
    <a href="" text-decoration="none">Student Dashboard</a>
    <div class="logout">
      <a href="login.php">Logout</a>
    </div>
  </header>
  <aside>
    <ul>
      <li><a href="">My Courses</a></li>
      <li><a href="myResultOfSemester.php">My Result</a></li>
    </ul>
  </aside>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $login = false;
      $showError = false;
      include 'partials/_dbconnect.php';
      $universityRollNo = $_POST["universityRollNo"];
      $semester = $_POST["semester"];
      
      $sql = "SELECT * FROM `university` WHERE universityrollno='$universityRollNo'";
      $result = mysqli_query($conn, $sql);

      if ($result) {
          $row = mysqli_fetch_assoc($result);
          if ($row && $universityRollNo == $row["universityrollno"]) {
              
                      $login = true;
                      header("location:semesterResults/firstsemester.php?universityRollNo=$universityRollNo&semester=$semester");
                      exit();
                 
          } else {
              $showError = "Invalid universityRollNo. Please try again.";
          }
      } else {
          $showError = "Database Query Failed.";
      }

      if ($login) {
          echo "<script>alert('Success! You are logged in.');</script>";
      }
      if ($showError) {
          echo "<script>alert('ERROR: $showError');</script>";
      }
  }
  ?>

  <div class="container">
    <center>
      <form action="#" method="post">
        <input type="text" name="universityRollNo" placeholder="Please enter your university Roll NO.">
        <br>
        <select name="semester" id="chooseSemester">
          <option value="null">Please choose your Semester.</option>
          <option value="FirstSemester">First Semester</option>
          <option value="SecondSemester">Second Semester</option>
          <option value="ThirdSemester">Third Semester</option>
          <option value="FourthSemester">Fourth Semester</option>
          <option value="FifthSemester">Fifth Semester</option>
          <option value="SixthSemester">Sixth Semester</option>
          <option value="SevenSemester">Seven Semester</option>
          <option value="EightSemester">Eight Semester</option>
        </select>
        <br>
        <input type="submit" value="Submit">
      </form>
    </center>
  </div>
</body>
</html>
