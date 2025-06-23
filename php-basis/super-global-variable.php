<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super global variables</title>
</head>
<body>


<h1>super global variables</h1>
    <?php
    echo $_SERVER['SERVER_NAME'];
    echo"<br>";
    echo $_SERVER['SERVER_PORT'];
    echo"<br>";
    echo $_SERVER['SERVER_ADDR'];
    echo"<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";
    echo "<br>";

    ?>
<!-- post superglobal method -->
<?php
    echo $_POST['fname'];
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";

    echo $_POST['address'];

    ?>
   
    <form action="" method=POST>
    Name: <br />
    <input
            type="text"
            name="fname"
            placeholder="please enter your name"
          />
          <br /><br />
          Email: <br />
          <input
            type="text"
            name="email"
            placeholder="please enter your email"
          />
          <br /><br />
          Address: <br />
          <textarea
            name="address"
            placeholder="please enter your address"
          ></textarea>
          <br /><br />

          <input
            type="submit"
            value="Submit"/>
    </form>
<!-- get superglobal method -->

    <?php
    echo $_GET['fname'];
    echo "<br>";
    echo $_GET['email'];
    echo "<br>";

    echo $_GET['address'];

    ?>

    <form action="" method=GET>
    Name: <br />
    <input
            type="text"
            name="fname"
            placeholder="please enter your name"
          />
          <br /><br />
          Email: <br />
          <input
            type="text"
            name="email"
            placeholder="please enter your email"
          />
          <br /><br />
          Address: <br />
          <textarea
            name="address"
            placeholder="please enter your address"
          ></textarea>
          <br /><br />

          <input
            type="submit"
            value="Submit"/>
    </form>


<!-- request superglobal method -->

    
<?php
    echo $_REQUEST['fname1'];
    echo "<br>";
    echo $_REQUEST['email1'];
    echo "<br>";

    echo $_REQUEST['address1'];

    ?>

    <form action="" method=GET>
    Name: <br />
    <input
            type="text"
            name="fname1"
            placeholder="please enter your name"
          />
          <br /><br />
          Email: <br />
          <input
            type="text"
            name="email1"
            placeholder="please enter your email"
          />
          <br /><br />
          Address: <br />
          <textarea
            name="address1"
            placeholder="please enter your address"
          ></textarea>
          <br /><br />

          <input
            type="submit"
            value="Submit"/>
    </form>
    
</body>
</html>