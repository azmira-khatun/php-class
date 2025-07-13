<?php
require_once("student-class.php");
if(isset($_POST["submit"])){
$id=$_POST["id"];
$name=$_POST["name"];
$gmail=$_POST["gmail"];
$phone=$_POST["phone"];



// if(preg_match("/^[0-9]{11-14}$/",$phone) && preg_match("/^[a-zA-Z0-9%#_\.\-]+[@][a-z]+[\.][a-z]{2,3}$/")){

if (preg_match("/^[0-9]{11,14}$/", $phone) && preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+[\.][a-z]{2,3}$/", $gmail)) {


$student=new Formdata($id,$name,$gmail,$phone);
$student->store();

    echo "phn and gmail number is valid";
}else{
    echo "phn and gmail number is invalid";
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
Id:<br>
<input type="number" name="id"><br><br>
Name:<br>
<input type="text" name="name"><br><br>
Gmail:<br>
<input type="text" name="gmail"><br><br>
Phone:<br>
<input type="number" name="phone"><br><br>

<input type="submit" name="submit" value="submit">
</form>

<?php
FormData::display_data();

?>

</body>
</html>