<?php
session_start();
if(isset($_POST["submit"])){
$userId=$_POST["id"];
$userPass=$_POST["password"];
$fileLocation=file("store.txt");


foreach($fileLocation as $data){
list($_userId,$_userpass)=explode(",",trim($data));
if(($_userId==$userId) && ($_userpass==$userPass)){
    $_SESSION['rename']=$userPass;
header("location:size-type.php");
    

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
        <fieldset style="width:120px">
UserId:<br>
<input type="text" name="id"><br><br>
UserPass:<br>
<input type="number" name="password"><br><br>
<input type="submit" value="LogIn" name="submit">
</fieldset>


    </form>
</body>
</html>