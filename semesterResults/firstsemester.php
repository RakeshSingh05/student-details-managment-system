<?php include_once 'desging.php' ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First Semester Result</title>
  <style>
    a{
      text-decoration: none;
      color: black;
    }
    button{
      padding:15px;
      background-color: green;
      margin:10px;
      font-size: medium;
      color:black;
      font-family: 'Times New Roman', Times, serif;
      width:165px;
      box-shadow: 5px 5px  0px #888888;

    }
  </style>
</head>
<body>
<?php
if (isset($_GET['universityRollNo']) && isset($_GET['semester'])) {
    $universityRollNo = $_GET['universityRollNo'];
    $semester = $_GET['semester'];
} else {
    echo "<p>Error: University Roll No and Semester not provided.</p>";
}
?>

<div class="container">
  <center>
    <form>
      <button>
        <a class="buttonType" href='download.php?universityRollNo=<?php echo $universityRollNo; ?>&semester=<?php echo $semester; ?>'>Download Result</a>
      </button>
      <br>
      <button>
        <a href='view.php?universityRollNo=<?php echo $universityRollNo; ?>&semester=<?php echo $semester; ?>'>View Result</a>
      </button>
    </form>
  </center>
</div>

</body>
</html>
