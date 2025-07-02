<?php
class User{
    const name="Hello World!"."<br>";
    public static function info(){
        echo "This is static method <br>";

    }
}




// $person=new User();
// $person->info();

echo User::info();
echo User::name;
echo User::$name="hello world"."<br>";\\error;





?>