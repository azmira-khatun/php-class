<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
 

// try {
//     tryStatements
//   } catch (exceptionVar) {
//     catchStatements
//   } finally {
//     finallyStatements
// }


$a = 10;


try{ 
if ($a<30){ 
 throw new Exception("valid Number"); 
}else { 
    throw new Exception("InValid Number");
}
}
catch(Exception $e){ 
    echo "Your error is:".$e->getMessage()."<br>";
}
finally{ 
    echo "This is finally done my work";
}
?>
    
  
</body>
</html>