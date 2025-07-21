<?php
require_once("student-form.php");
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $gmail=$_POST["gmail"];

    if(preg_match("/^[0-9]{2,4}$/",$id) && preg_match("/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9+-]+[\.][a-z]{2,3}$/",$gmail)){
        $student=new FormData($id,$name,$gmail);
        $student->store();
        echo "id and gmail are valid";
    }else{
        echo "id and gmail are incorrect";
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
    <input type="text" name="id"><br><br>
    Name:<br>
    <input type="text" name="name"><br><br>
    Gmail:<br>
    <input type="text" name="gmail"><br><br>
<input type="submit" name="submit" value="submit">
   </form> 

   <?php
   FormData::display_result();
   
   ?>
</body>
</html>