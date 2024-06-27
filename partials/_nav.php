<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nav bar for all pages head</title>
  <style>
    ul{
        list-style: none;
        display: inline-flex;
        margin-top:15px;
        padding-right:12px;
    }
    *{
      margin:0%;
      padding:0%;

    }
    .nav{
      background-color:black;
      display:flex;
      width:100%;
      height:75px;
      justify-content:space-between;
      text-align: center;
      flex-direction: row;
      position:fixed;
      top:0%;
      

    }
    a{
      
      font-size:22px;
      text-decoration:none;
      color:white;
      padding:15px;
      text-transform: capitalize;

  }
    .rvscet{
      color:white;
      font-size: 33px;
      margin-top:15px;
      padding-left:25px;
    }


  </style>
</head>
<body>
  <div class="nav">
  <div class="rvscet">
    RVSCET
  </div>
  <div>
    <ul>
      <li>
          <a href="index.php">Home</a>
      </li>
      <li>
          <a href="login.php">Login</a>
      </li>
      <li>
        <a href="logout.php">logout</a>
      </li>
      <li>
        <a href="signup.php">signup</a>
      </li>
    </ul>
  </div>
  </div>
</body>
</html>