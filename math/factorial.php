
<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h>Factorial Calculator in PHP</h>
<?php   
    if( isset($_POST['submit'])){
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  
</body>  
</html> 

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // if (isset($_POST['submit'])) {
    //     $num = $_POST['num'];
    //     $factorial = 1;

    //     if ($num < 0) {
    //         echo "Factorial is not defined for negative numbers.";
    //     } else {
    //         for ($i = 1; $i <= $num; $i++) {
    //             $factorial *= $i;
    //         }
    //         echo "<h3>Factorial of $num is: $factorial</h3>";
    //     }
    // }  //5 x 4 x 3 x 2 x 1 = 120; 
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        $factorial = 1;

        if($num<0){
            echo " Factorial is not define for negative numbers.";
        }else{
            for($i = 1;$i<= $num; $i++){
                $factorial *= $i;
            }
            echo "<h3>Factorial of $num is: $factorial</h3>";
        }
    }
    ?>
</body>
</html>

