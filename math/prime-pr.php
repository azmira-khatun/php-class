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
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num=$_POST['number'];
        $isPrime=true;
        if($num==0 || $num==1){
            echo "$num is not a prime or composit number";
       
       for($i=2;$i<=sqrt($num);$i++){
        if($num%2==0){
            $isPrime=false;
            break;
        }
         } 
          }
        if($isPrime){
                    echo "$num is a prime number ";
    
        }else{
                      echo "$num is not a prime number ";
  
        }



      




    }
    
    ?>
</body>
</html>