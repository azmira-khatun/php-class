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
<input type="number" name="numX" value="numX" required>
Number Y:
<input type="number" name="numY" value="numY" required>
Number Z:
<input type="number" name="numZ" value="numZ"required>
<input type="submit" name="submit" value="submit">

    </form>



    <?php

   if($_SERVER['REQUEST_METHOD']=="POST"){
    $x=$_POST["numX"];
    $y=$_POST["numY"];
    $z=$_POST["numZ"];

echo "Result <br><br>";
echo "You enter X:$x ,Y:$y, Z:$z <br>";

if(($x>$y) && ($x>$z)){
    echo "$x is a largest number";
}elseif(($y>$x) && ($y>$z)){
     echo "$y is a largest number";
  
}else{
        echo "$z is a largest number";
 
   }
    
    
}
    
    
    ?>
</body>
</html>