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
<input type="number" name="number" value="number" required>
<input type="submit" name="submit" value="submit">
 </form>

 <?php
 if(isset($_POST['submit'])){
    $num=$_POST['number'];
    $isprime=true;
if($num==1 || $num==0){
    echo "<p>$num is not a prime or composite number</p>";
    return;
}else{
    for($i=2; $i<=sqrt( $num); $i++){
        if($num %$i==0){
     $isprime=false;
     break;
        }
    }
}

if($isprime){
    echo "<p>$num is a prime number</p>";
}else{
    echo "<p>$num is not a prime number</p>";
  
}



 }
 
 
 
 
 ?>
</body>
</html>