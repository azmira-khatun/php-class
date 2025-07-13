
<?php  
 if(isset($_POST['btnSubmit'])){ 
    $filename=$_FILES['my_file']['name'];
    $temp_file=$_FILES['my_file']['tmp_name'];
    $file_size=$_FILES['my_file']['size'];
    $file_type=$_FILES['my_file']['type'];
    $img="images/";
    $uploadOk = 1;
    $kb=$file_size/1024;
    // 1024 byte	1 Kilobyte(kb)
    
  if($kb>400){ 
  echo "File is too large";
  } else { 
    move_uploaded_file("$temp_file","$img.$filename");
    echo "successfully";
  }

    if($file_type != "jpg" && $file_type != "jpeg"
        && $file_type != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
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
    <div style=" width:500px; margin:10px auto">

    <form action="" method="post" enctype="multipart/form-data"> 
      <fieldset>
      <input type="file" name="my_file">
      <input type="submit" name="btnSubmit" value="upload">
      </fieldset>
    </form>

   </div> 
</body>
</html>

<?php  

	echo "<image src='$img.$filename' width='300px'>";

?>