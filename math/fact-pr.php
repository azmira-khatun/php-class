<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post">
    Enter the number:<br>;
    <input type="number" name="number" required>
    <input type="submit" value="submit" name="submit">



  </form> 
  <?php
  if(isset($_POST['submit'])){
    $fact=1;
    $number=$_POST['number'];
    echo "Factorial of $number:<br><br>";
    for($i=1; $i<=$number; $i++){
        $fact*=$i;
    }
    echo $fact;
  }
  
  
  
  
  ?>
  
  
</body>
</html>