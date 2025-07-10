
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phon No.</title>
</head>
<body>
    <form method="post">
        Contact:
        <input type="text" name="con" ><br><br>
        Email:
        <input type="text" name="email" ><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $con = $_POST['con'];
        $email = $_POST['email'];
        $phone_pattern ="/^[0-9+]{11,14}$/";
        $email_pattern ="/^[a-zA-Z0-9#%_\-\.]+[@][a-z]+[\.][a-z]{2,3}$/";
        echo "<br>";

        // if(preg_match($phone_pattern,$con)){
        //     echo "Phone Number is Valid";
        // }else{
        //     echo "Phone Number is Invalid";

        // }

        // echo "<br>";
        // echo "<br>";

        // if(preg_match($email_pattern,$email)){
        //     echo "Email is Valid";
        // }else{
        //     echo "Email is Invalid";

        // }


        if(preg_match($phone_pattern,$con) && preg_match($email_pattern,$email)){
            echo " Both Phone Number and Email is Valid";
        }elseif(preg_match($phone_pattern,$con) ){
            echo " Phone Number is Valid";
        }elseif(preg_match($email_pattern,$email) ){
            echo " Email is Valid";
        }else{
            echo " Both Phone Number and Email is Invalid";
            
        }
    }
    ?>
</body>
</html>