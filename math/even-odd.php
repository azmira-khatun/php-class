<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
Enter the number:<br>
<input type="number" name="number" required>
<input type="submit" name="submit" value="submit">

    </form>


    <?php
    if(isset($_POST['submit'])){
        $num=$_POST['number'];

if($num%2==0){
    echo "$num is a even number.<br>";
}else{
    echo "$num is a odd number.<br>";
    

}



    }
    
    
    
    
    
    ?>
</body>
</html>