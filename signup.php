<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        body {
            background-color: rgba(239, 239, 239, 255);
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 9% 34%;
            flex-direction: column;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 405px;
            padding: 25px;
        }
        input, select {
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
        select{
            width: 328px;
            height: 70px;
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
        include 'partials/_dbconnect.php';
        $showAlert = false;
        $showError = false;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $userType = $_POST["usertype"];
        $email = $_POST["email"];

        // Check whether this username exists
        $existSql = "SELECT * FROM `users` WHERE username = ?";
        $stmt = $conn->prepare($existSql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $numExistRows = $result->num_rows;

        if ($numExistRows > 0) {
            $showError = "Username already exists.";
        } else {
            if (($password == $cpassword)) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` ( `username`, `password`, `usertype`, `email`, `dt`) VALUES (?, ?, ?, ?, current_timestamp())";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $username, $hashed_password, $userType, $email);
                $result = $stmt->execute();

                if ($result) {
                    $showAlert = true;
                }
            } else {
                $showError = "Passwords do not match.";
            }
        }

        if ($showAlert) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your account is now created and you can login.
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
        <div><h1 class="text-center">Register Now</h1><br></div>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Please Enter your Name" required><br>
            <input type="email" name="email" placeholder="Please enter your Email" required><br>
            <input type="password" name="password" placeholder="Please enter your Password" required><br>
            <input type="password" name="cpassword" placeholder="Please re-enter your Password" required><br>
            <select name="usertype" id="options" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
                <option value="student">Student</option>
            </select><br>
            <input class="signup" type="submit" value="Signup">
            <div class="lowerParagaraph">
                <p>Already have an account? <a href="login.php">Login now</a></p>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
