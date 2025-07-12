<?php
session_start();
if(isset($_POST['login_button'])){
    $userId = $_POST['userId'];
    $userpass = $_POST['user_password'];
    $fileLocation =file('data_store.txt');


    foreach($fileLocation as $data){
        list($_userId,$_userpass)= explode(",", trim($data));
        if(($_userId == $userId) && ($_userpass == $userpass)){
            $_SESSION['rename']= $userpass;
            header("location:main_page.php");
        }else{
            $alrt_text ="<h3>Username or Password is incorrect!</h3>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <style>
        div{
            width: 200px;
            height: 160px;
            background-color: aliceblue;
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
        }
        fieldset{
            padding:8px 10px;
            border-radius: 5px;

        }
    </style>
</head>
<body><div>
    <form action="#" method="post">
        <fieldset>

            UserID:
            <input type="text" name="userId" ><br><br>
            Password:
            <input type="text" name="user_password" ><br><br>
            <input type="submit" name="login_button" value="Log In">        
            
        </fieldset>
    </form>
    </div>
    <?php
    echo isset($alrt_text)?$alrt_text:"";
    ?>
</body>
</html>