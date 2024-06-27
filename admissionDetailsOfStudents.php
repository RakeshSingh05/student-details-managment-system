
<?php include 'admin_nav.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission</title>
</head>

<body>
     
  <?php require 'partials/_dbconnection2.php';

  $sql ="select * from studentdetails";
  $result = mysqli_query($conn,$sql);


  
  ?>
  <style>
  .sytlingForTableData{
    padding:10px 20px;

  }
  .header{
  background-color: skyblue;
  width:179%;
  height:25px;
  padding:25px 0px;
}
  
  

</style>
  <div class="container">
    <center> <h1>Applied for Admission</h1></center>
     
     <table border:1px solid black>
     <!-- $sql = "INSERT INTO `studentdetails` (`FIRST NAME`, `Last name`, `studentNumber`, `Year`, `Degree Program`, `Email`, `Network provider`, `Phone`, `select Month`, `Select Day`, `Select year`, `streetaddresss`, `streetaddresssecond`, `cityaddress`, `postal`, `state`, `country`, `Date`)  -->


      <tr>
       <th style="padding:25px; font-size:15px; ">FIRST NAME</th>
       <th style="padding:25px; font-size:15px; ">Last name</th>
       <th style="padding:25px; font-size:15px; ">studentNumber</th>
       <th style="padding:25px; font-size:15px; ">Year</th>
       <th style="padding:25px; font-size:15px; ">Degree Program</th>
       <th style="padding:25px; font-size:15px; ">Email</th>
       <th style="padding:25px; font-size:15px; ">Network provider</th>
       <th style="padding:25px; font-size:15px; ">Phone</th>
       <th style="padding:25px; font-size:15px; ">select Month</th>
       <th style="padding:25px; font-size:15px; ">Select Day</th>
       <th style="padding:25px; font-size:15px; ">Select year</th>
       <th style="padding:25px; font-size:15px; ">streetaddresss</th>
       <th style="padding:25px; font-size:15px; ">streetaddress second</th>
       <th style="padding:25px; font-size:15px; ">cityaddress</th>
       <th style="padding:25px; font-size:15px; ">postal</th>
       <th style="padding:25px; font-size:15px; ">state</th>
       <th style="padding:25px; font-size:15px; ">country</th>
      </tr>

    <?php 
      while($info = $result->fetch_assoc()){  ?>



      <tr>
        <td class="sytlingForTableData">
      <?php echo "{$info ['FIRST NAME']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Last name']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['studentNumber']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Year']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Degree Program']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Email']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Network provider']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Phone']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['select Month']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Select Day']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['Select year']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['streetaddresss']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['streetaddresssecond']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['cityaddress']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['postal']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['state']}"; ?>  
      </td>
      <td class="sytlingForTableData">
      <?php echo "{$info ['country']}"; ?>  
      </td>
     
      </tr>


        <?php }
        ?>
     </table>
  </div>
  
</body>
</html>