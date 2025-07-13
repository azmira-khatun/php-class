<?php
if(isset($_POST["submit"])){
    $tmp_nam=$_FILES["name"]["tmp_name"];
    $name=$_FILES["name"]["name"];
    $size=$_FILES["name"]["size"];
    $type=$_FILES["name"]["type"];
    $uploadOk=1;
    $img="images/";

    // size work start

    $kb= $size/1024;
    if($kb>400){
        echo "file is so large";
    }else{
        move_uploaded_file($tmp_nam,$img.$name);
        echo "file upload successfull .<br>";
    }
// type start
if( $type!="jpg" && $type!="jpeg" && $type!="gif" ){
    echo "sorry not support this condition";
    $uploadOk=0;
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
    <div style="width: 120px; margin: 10px auto;">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
    <input type="file" name="name"><br>
    <input type="submit" name="submit" value="submit">

</fieldset>
    </form>


<?php
if(isset($_POST['submit'])){

  echo "<img src='images/$name' width='300px'>"."<br>";

  echo "Filename: " . $_FILES["name"]['name']."<br>";
  echo "Type : " . $_FILES["name"]['type'] ."<br>";
  echo "Size : " . $_FILES["name"]['size'] ."<br>";
  echo "Temp name: " . $_FILES["name"]['tmp_name'] ."<br>";
  echo "Error : " . $_FILES["name"]['error'] . "<br>";

}

?>



    </div>
</body>
</html>