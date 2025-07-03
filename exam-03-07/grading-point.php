<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
Enter your gradding point<br>
<input type="text" name="number" required>
<input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit'])){
    $number=$_POST['number'];
$grade="";

if($number=="A+"){
    $grade="Outstanding";
}elseif($number=="A"){
    $grade="Very good";

}elseif($number=="B"){
    $grade="Good";

}elseif($number=="C"){
    $grade="Poor";
 
}else{
    $grade="Fail";
   
}
echo " <h3>Your result is:$grade</h3>";   


}





?>








</body>
</html>