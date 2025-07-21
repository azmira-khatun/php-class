<?php
session_start();
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $file = file("dataa.txt");
    foreach ($file as $line) {
        list($_username, $_password) = explode(",", trim($line));
        if (trim($_username) === $username && trim($_password) === $password) {
            $_SESSION["sname"] = $username;
            header("location:step7.php");
            exit();
        }
    }
    $msg = "Username or Password is incorrect!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 350px;
            background-color: #EDEADE;
            padding: 30px;
            margin: 80px auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #e2d9b3ff;
            color: white;#FFAC1C
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #021d115d;
        }

        .error-message {
            color: red;
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Information</h2>
    
    <?php if (isset($msg)) { echo "<div class='error-message'>$msg</div>"; } ?>

    <form action="#" method="post">
        Username:
        <input type="text" name="username" required>

        Password:
        <input type="password" name="password" required>

        <input type="submit" name="Login" value="Log In">
    </form>
</div>

</body>
</html>