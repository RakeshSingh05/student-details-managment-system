<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desgine of result dash board . </title>
  <style>
    *{
  margin:0%;
  padding:0%;
}
.header{
  background-color: skyblue;
 
  width:100%;
  height:25px;
  padding:25px 0px;
}
.header a{
  text-decoration:none;
 
  font-size:25px;
  
}
.logout{ 
  float: right;
  margin-right:10x;
  padding:5px 5px;
  background-color: blue;
  color:#fff;
  border-radius: 15px;
}
.logout a{
  color: #fff;
  padding: 5px 5px;
  font-size:25px;
 
}
aside a{
  text-decoration: none;
  font-family: 'Times New Roman', Times, serif;
  font-size: 18px;
}
ul{
  background-color: #0f224b;
  width:16%;
  height:100%;
  position:fixed;
  padding-top:5%;
  text-align: center;
}

ul li{
  list-style: none;
  padding-bottom: 20px;
  padding-top: 15px;
  font-size: 15px;
  text-align: center;
}


ul li a{
  color:#fff;
  font-weight:900;

}
 ul li a:hover{
  color:skyblue;
 }
 .container{
  margin-left:20%;
  margin-top:25px;
 }
 table, th, td {
  margin-top:15px;
  border: 1px solid black;
  border-collapse: collapse;
}

td{
  padding :5px;
}
  </style>
</head>
<body>
<header class="header" >
  <a href="" text-decoration="none"> Student Dash Board</a>
  <div class="logout"> 
  <a href="login.php" > logout</a>
  </div>
</header>
<aside>
  <ul>
    <li>
      <a href="">My Courses</a>
    </li>
    <li>
      <a href="myResultOfSemester.php">My Result</a>
    </li>
    
  </ul>
</aside>

  
</body>
</html>