
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phon No.</title>
</head>
<body>
    <form method="post">
        Email:
        <input type="text" name="email" ><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pattern ="/^[a-zA-Z0-9#%_\-\.]+[@][a-z]+[\.][a-z]{2,3}$/";

        echo "<br>";

        if(preg_match($pattern,$email)){
            echo "Email is Valid";
        }else{
            echo "Email is Invalid";

        }
    }
    ?>
</body>
</html>