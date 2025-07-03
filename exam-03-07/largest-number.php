<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
Enter the number:<br>
Number X:
<input type="number" name="numX" required>
Number Y:
<input type="number" name="numY" required>
Number Z:
<input type="number" name="numZ" required>

<input type="submit" value="submit" name="submit">

    </form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$x=$_POST['numX'];
$y=$_POST['numY'];
$z=$_POST['numZ'];
 echo "Result .<br>";
 echo "You enter X:$x,Y:$y,Z:$z .<br>";

 if(($x>$y) &&($X>$z)){
    echo "$x is the largest number";
 }elseif(($y>$x) &&($y>$z)){
    echo "$y is the largest number";
 }else{
    echo "$z is the largest number";
 
 }


}




?>

</body>
</html>