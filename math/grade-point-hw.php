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
    $number=$_POST['number'];
    $grade="";

if($number>=80 && $number<=100){
$grade="5.00 (A+)";

}elseif($number>=70){
$grade="4.00 (A)";
   
}elseif($number>=60){
$grade="3.00 (A-)";
} elseif($number>=40){
$grade="2.00 (B)";

} else{
 $grade="1.00 (fail)";
   
}
    
 echo " <h3>Your grade point is:$grade</h3>";   
    
  }    
    ?>
</body>
</html>