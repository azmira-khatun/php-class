<?php
class FormName{
    private $id;
    private $name;
private static $file="show.txt";


function __construct($_id,$_name){

    $this->id=$_id;
    $this->name=$_name;
}

function fn(){
return  $this->id."-". $this->name.PHP_EOL;

}

function store(){
    file_put_contents(self::$file,$this->fn().FILE_APPEND);
}


}


?>