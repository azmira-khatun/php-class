<?php
class S{
    public static $Value=34;
    public function staticValue(){
        return self::$Value;

    }
// normal static function end
    public function show(){
        return "This is static method";
    }
    public function applyStatic(){
        return self::show();
    }



    // inheritance start


    
}



$p=new S();
echo $p->staticValue();
echo $p->applyStatic();
// echo S::show();  ai show function a jodi static keyword use kori tahola amn vba call korta prbo.


?>