<?php
session_start();
if(isset($_POST["submit"])){
$userId=$_POST["id"];
$userPass=$_POST["name"];

$fileLocation=file("data_store.txt");
foreach($fileLocation as $data){
    list($_userId,$_userPass)=explode(",",trim($data));
        if(($_userId == $userId) && ($_userpass == $userpass)){
$_SESSION["rename"]=$userpass;
header("location:main.php");
        }else{
            $alrt_text ="<h3>Username or Password is incorrect!</h3>";
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
        <fieldset>
UserId:<br>
<input type="number" name="id"><br><br>
UserPassword:<br>
<input type="number" name="name"><br><br>
<input type="submit" name="submit" value="submit">
</fieldset>

    </form>

    <?php
    echo isset($alrt_text)?$alrt_text:"";
    
    ?>
</body>
</html>