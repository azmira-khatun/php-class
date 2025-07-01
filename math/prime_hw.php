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
<input type="number" name="number" min=1 required>
<input type="submit" name="submit" value="submit">
 </form>

 <?php
 if(isset($_POST['submit'])){
    $num=$_POST['number'];
    $isprime=true;
if($num==0 || $num==1){
    echo "$num is not a prime or composite number";
     $isprime=false;
   
}else{
    for($i=2; $i<=sqrt($num); $i++){
        if($num%$i==0){
     $isprime=false;
     break;
        }
    }
}

if($isprime){
    echo "$num is a prime number";
}else{
      echo "$num is  not a prime number";
  
}



 }
 
 
 
 
 ?>
</body>
</html>