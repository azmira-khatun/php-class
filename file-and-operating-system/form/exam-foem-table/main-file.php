<?php
require_once("student-class.php");
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["fn"];
    $batch=$_POST["batch"];
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

    <style>
div{
background-color:rgb(186, 171, 243);
color:black;
border-radius: 10px;
margin: 30px auto;
padding: 5px;
width: 300px;
height: 300px;



}

input[type=text],input[type=submit]{
    width:90%;
    border-radius: 3px;
}


    </style>
</head>
<body>
    <div>
    <form method="post">
Name:<br>
<input type="text" name="fn"><br><br>
Id:<br>
<input type="number" name="id"><br><br>
Batch:<br>
<input type="text" name="batch"><br><br>
<input type="submit" name="submit" value="submit" style="background-color:red color:azure font-weight:bold">




    </form>
    </div>

    <?php
    FormData::display_result();
    
    ?>
    
</body>
</html>