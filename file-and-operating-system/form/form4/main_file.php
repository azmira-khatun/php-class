<?php
require_once("text_file.php");
if(isset($_POST["submit"])){
    $name=$_POST["fn"];
    $id=$_POST["id"];

    $student=new Student($id,$name);
    $student->save();
    echo "Form submit successful";
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
<input type="submit" value="submit" name="submit">




   </form> 
</body>
</html>
<?php
echo $students::display()



?>