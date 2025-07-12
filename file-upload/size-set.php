<?php
if(isset($_POST['btnsubmit'])){
  $tmp_name=$_FILES["myfile"]["tmp_name"];
  $name=$_FILES['myfile']['name'];
 $file_size=$_FILES['myfile']['size'];
$img="images/";
$kb=$file_size/1024;
if($kb>400){
    echo "file is too large";

}else{
    move_uploaded_file($tmp_name,$img.$name);
echo "successfully";
}

	  
}
?>


<body>
<div style=" width:500px; margin:10px auto">
<form action="#" method="post" enctype="multipart/form-data">
<fieldset>
<input type="file" name="myfile"><br><br>
<input type="submit" name="btnsubmit"><br>
</fieldset>
</form>



<?php
if(isset($_POST['btnsubmit'])){

  echo "<img src='images/$name' width='300px'>"."<br>";

  echo "Filename: " . $_FILES["myfile"]['name']."<br>";
  echo "Type : " . $_FILES["myfile"]['type'] ."<br>";
  echo "Size : " . $_FILES["myfile"]['size'] ."<br>";
  echo "Temp name: " . $_FILES["myfile"]['tmp_name'] ."<br>";
  echo "Error : " . $_FILES["myfile"]['error'] . "<br>";

}

?>



</div>

</body>