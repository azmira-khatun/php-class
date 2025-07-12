<?php
session_start();
if(!isset($_SESSION['rename'])){
    header("location:login_form.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <style>
        body {
            background-color: aliceblue;
            text-align: center;
            margin: 40px auto;
            font-weight: bolder;
            font-family: sans-serif;
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-container img {
            width: 400px;
            height: 400px;
        }

        .image-container h4 {
            position: absolute;
            top: 20%; /* Adjust this to position the text inside the screen */
            left: 62%;
            transform: translate(-50%, -50%);
            width: 50%;
            color: black;
            font-size: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* optional for contrast */
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<a href="close-form.php">Close Page</a>

    <div class="image-container">
        <img src="https://icon-library.com/images/desktop-computer-icon-png/desktop-computer-icon-png-1.jpg" alt="Computer Icon">
        <h4>Welcome To Our <br>Main Page</h4>
    </div>
    <a href="logout.php">Logout</a>
</body>
</html>