<?php
require_once("my-cw.php");

if(isset($_POST["sub"])){
    $id=$_POST["id"];
    $name=$_POST["fn"];
    $contact=$_POST["contact"];
   $email = $_POST['email'];

    $email_pattern ="/^[a-zA-Z0-9#%_\-\.]+[@][a-z]+[\.][a-z]{2,3}$/";


     echo "<br>";

        if(preg_match($email_pattern,$email)){
            echo "Email is Valid";
        }else{
            echo "Email is Invalid";

        }
$student=new FaName($id,$name,$contact);
$student->store();
 echo "Success!" ;

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form method="post">
      Name:<br />
      <input type="text" name="fn" /><br /><br />
      Id:<br />
      <input type="number" name="id" /><br><br>

      Contact:<br>
      <input type="number" name="contact" /><br><br>

       Email:
        <input type="text" name="email" ><br><br>

      <input type="submit" name="sub" value="submit" />
      
    </form>

    <?php
    
    FaName::display_result();
    
    ?>
  </body>
</html>
