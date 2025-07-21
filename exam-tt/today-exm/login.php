<?php
session_start();

// if form submitted
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // read in user file
    $file = file("dataa.txt");

    // check line by line
    foreach ($file as $line) {
        list($savedUser, $savedPass) = explode(",", trim($line));
        
        if ($username === trim($savedUser) && $password === trim($savedPass)) {
            $_SESSION["sname"] = $username; // login success
            header("Location: fileupload.php");
            exit();
        }
    }

    $msg = "Invalid username or password!";
}
?>
<!-- HTML Form start here-->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
    div{
     background-color: lavender;
            width: 350px;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            font-weight:bolder;  
    }
</style>
</head>
<body>
    <?php if (isset($msg)) echo "<p style='color:red;'>$msg</p>"; ?>
    <div>
    <form method="post">
        <fieldset>
             <legend style="text-align:center;" >Login</legend>
        Username: <input type="text" name="username" required><br> <br>
        Password: <input type="password" name="password" required><br> <br>
        <input type="submit" name="Login" value="Log In">
        </fieldset>
    </form>
    </div>
</body>
</html>