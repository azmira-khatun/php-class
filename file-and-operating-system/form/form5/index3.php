<?php
require_once("student_class2.php");
if(isset($_POST["submit"])){
    $id=$_POST["id"];

$name=$_POST["name"];
$contact=$_POST["con"];

if(preg_match("/^[0-9]{11-14}$/",$contact)){
    $student=new FormData($id,$name,$contact);
    $student->store();
    echo "form submit successful";



}else{
    echo " contact invalid ";
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
    <form action="#" method="post">
<div>
ID:<br/>
<input type="text" name="id" />
</div>

<div>
Name<br/>
<input type="text" name="name" />
</div>



<div>
Contact<br/>
<input type="text" name="con" />
</div>

<div>
<input type="submit" name="submit" value="Submit" />
</div>
</form>
<?php
FormData::display_ans();

?>
</body>
</html>