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
<input type="number" name="number" required>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $fact=1;

if($number<=0){
    echo "negative number is not a factorial number";
}else{
    for($i=1; $i<=$number; $i++){
        $fact*=$i;
    }
}
echo $fact."<br>";


}



?>



</body>
</html>