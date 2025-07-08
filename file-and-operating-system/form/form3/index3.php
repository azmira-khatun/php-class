<?php
require_once("store-file.php");
if(isset($_POST["submit"])){
    $name=$_POST["fn"];
    $id=$_POST["id"];
    $email=$_POST["mail"];
    $round=$_POST["round"];

$student=new FormName($name,$id,$email,$round);
$student->save();
echo "form  submit successful!";

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
Gmail:<br>
<input type="text" name="mail"><br><br>
Round:<br>
<select name="round" id="">
    <option value="round">66</option>
        <option value="round">65</option>
    <option value="round">63</option>

</select><br><br>

<input type="submit" name="submit" value="submit">



    </form>
</body>
</html>