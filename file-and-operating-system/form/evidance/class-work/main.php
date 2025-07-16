<?php
require_once("student-form2.php");
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $gmail=$_POST["gmail"];
if (preg_match("/^[0-9]{2,5}$/", $id) && preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+[\.][a-z]{2,3}$/", $gmail)) {
$student=new FormData($id,$name,$gmail);
$student->store();
}else{
    echo "id and gmail are invalid";
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
    <div style="width: 250px; height: 250px;background-color:aqua; border-radius: 10px; margin: 5px auto;">
   <form method="post">
    <fieldset>
    ID:<br>
    <input type="number" name="id"><br><br>
        Name:<br>
    <input type="text" name="name"><br><br>
    Gmail:<br>
    <input type="text" name="gmail"><br><br>
    <input style="background-color:red; color:white" type="submit" name="submit" value="submit"><br>

</fieldset>




   </form>
     </div> 
<?php
FormData::display_result();


?>

 
</body>
</html>