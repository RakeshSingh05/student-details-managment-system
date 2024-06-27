<?php
session_start();

// Generate a random number for captcha if not already set
if (!isset($_SESSION['captcha'])) {
    $_SESSION['captcha'] = rand(100000, 999999);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        body {
            background-color: rgba(239, 239, 239, 255);
            margin-top:7%;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5% 34%;
            flex-direction: column;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 405px;
            padding: 25px;
        }
        input {
            width: 299px;
            height: 45px;
            text-transform: lowercase;
            padding: 15px;
            font-size: 18px;
            margin: 5px 0;
            border: none;
            background-color: rgba(239, 239, 239, 255);
            border-radius: 6px;
        }
        .signup {
            width: 335px;
            height: 45px;
            text-transform: capitalize;
            padding: 13px;
            font-weight: bold;
            margin: 5px 0;
            border: none;
            border-radius: 6px;
            background-color: rgba(251, 209, 218, 255);
            color: brown;
        }
        .lowerParagaraph {
            margin-top: 15px;
            padding-left: 15px;
        }
        .lowerParagaraph a {
            color: red;
            text-transform: lowercase;
            padding: 0;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <?php include 'partials/_nav.php'; ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = false;
        $showError = false;
        include 'partials/_dbconnect.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $userCaptcha = $_POST["captcha"];

        // Check captcha
        if ($userCaptcha != $_SESSION['captcha']) {
            $showError = "Invalid Captcha. Please try again.";
            // Regenerate captcha
            $_SESSION['captcha'] = rand(100000, 999999);
        }   else if($_SERVER["REQUEST_METHOD"]== "POST"){
            $login = false;
            $showError = false;
             include 'partials/_dbconnect.php';
             $username = $_POST["username"];
             $password = $_POST["password"];
             
             $sql = "SELECT * FROM `users` WHERE username='$username' AND password ='$password'";
             $result = mysqli_query($conn, $sql);
             $num = mysqli_num_rows($result);
             $row = mysqli_fetch_array($result);
             if($num == 1){
              $login = true;
              session_start();
              $_SESSION['loggedin'] = true;
              if($row['usertype'] =="admin")
              {  
                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = "user";
                header("location: adminhome.php");
              }
              else if($row['usertype'] =="student")
              {
                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = "student";
                header("location: studenthome.php?student_id=$username");
              }
             }
                else{
              $showError = "Invalid Credentials ";
             }
             if($login){
              echo'
             <div>
                 <strong>Success!</strong> You are logged in . 
                </div>';
            }
            if($showError){
              echo'
             <div>
                 <strong>ERROR!</strong> '.$showError.'
                </div>';
            }
          }
        if ($login) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> You are logged in.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if ($showError) {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!</strong> ' . $showError . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }
    ?>

    <div class="container">
        <div><h1 class="text-center">Login Now</h1><br></div>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Please Enter your Name" required><br>
            <input type="password" name="password" placeholder="Please enter your Password" required><br>
            <input type="text" name="captcha" placeholder="Enter Captcha" required><br>
            <p>Captcha: <?php echo $_SESSION['captcha']; ?></p>
            <input class="signup" type="submit" value="Login">
            <div class="lowerParagaraph">
                <p>Don't have an account? <a href="signup.php">Register now</a></p>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
