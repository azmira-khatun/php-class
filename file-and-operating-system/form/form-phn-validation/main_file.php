<?php
require_once("text_file.php");
if(isset($_POST["submit"])){
    $name=$_POST["fn"];
    $id=$_POST["id"];
    $phone=$_POST["phone"];




    if(preg_match("/^[0-9]{11,14}$/",$phone)){
        $student=new Student($id,$name,$phone);
        $student->save();
        echo "Form submit successful";
    }else{
        echo "Invalid phone";
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
Name:<br>
<input type="text" name="fn"><br><br>
Id:<br>
<input type="number" name="id"><br><br>
Phone:<br>
<input type="number" name="phone">
<input type="submit" value="submit" name="submit">




   </form> 

   <?php
 Student::display_students();
?>

</body>
</html>
