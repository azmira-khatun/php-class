
<?php
session_start();
if (!isset($_SESSION["rename"])) {
    header("location:login.php");
    exit;
}
?>

<?php
require_once("my-cw.php");

if(isset($_POST["btnSubmit"])){
    $id=$_POST["id"];
    $name=$_POST["fn"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];

$student=new FaName($id,$name,$contact,$email);
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
      Email:<br>
      <input type="email" name="email" /><br><br>

      <input type="submit" name="btnSubmit" value="submit" />
      
    </form>

    <a href="close.php">Close Page</a>

    <?php
    
    FaName::display_result();
    
    ?>

  </body>

</html>
