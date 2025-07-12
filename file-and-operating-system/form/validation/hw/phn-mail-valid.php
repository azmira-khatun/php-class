











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post">
Name:<br>
<input type="text" name="fn"><br><br>
Gmail:<br>
<input type="text" name="mail"><br><br>
Phone:<br>
<input type="number" name="phn"><br><br>
<input type="submit" name="submit" value="submit"><br><br>



   </form>
   
   
<?php
if(isset($_POST["submit"])){
    $name=$_POST["fn"];
    $gmail=$_POST["mail"];
      $phone=$_POST["phn"];
$my_phn="/^[0-9]{11,14}$/";
$my_mail="/^[a-zA-Z0-9%#+_\.\-]+[@][a-z]+[\.][a-z]{2,4}$/";
if(preg_match($my_phn,$phone) && preg_match($my_mail,$gmail)){
echo "phn and gmail is valid";
}elseif(preg_match($my_phn,$phone)){
    echo "phn is valid";
}elseif(preg_match($my_mail,$gmail)){
echo "gmail is valid";
}else{
    echo "both are invalid";
}




  
}



?>




</body>
</html>