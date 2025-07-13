<?php
if (isset($_POST["btnsubmit"])){ 
  $filename = $_FILES['myfile']['name'];
  $tmpfile = $_FILES['myfile']['tmp_name'];
  $img = 'images/';
 
   if(!empty($filename)){ 
    move_uploaded_file($tmpfile,$img.$filename);
   } else { 
    echo "please select a file";
   }
}
 
?>
<body>
  <div style=" width:500px; margin:10px auto">

<form action="" method="post" enctype="multipart/form-data"> 
  Image :
  <fieldset>
  <input type="file" name="myfile" ><br><br>
  <input type="submit" name="btnsubmit" value="Upload"> 
  </fieldset>
</form>

<?php
if(isset($_POST["btnsubmit"])){ 
	echo "<image src='$img/$filename' width='300px'>";
}
?>
</div>
</body>