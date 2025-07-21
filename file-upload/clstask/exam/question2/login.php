<?php
session_start();
if(isset($_POST["submit"])){
    $userId=$_POST["id"];
        $userPass=$_POST["word"];
$fileData=file("store.txt");
 foreach($fileData as $data){
    list($_userId,$_userPass)=explode(",",trim($data));
    if(($_userId== $userId) && ($_userPass==$userPass)){
        $_SESSION["rename"]=$userPass;
        header("location:size-type.php");
    }else{
        $alt="<h3></h3>";
    }
 }




}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        UserId:<br>
        <input type="text" name="id"><br><br>
        UserPass:<br>
                <input type="number" name="word">
<input type="submit" name="submit" value="submit">
    </form>

        <a href="logout.php">Logout</a>

</body>
</html>