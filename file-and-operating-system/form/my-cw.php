<?php
class Faname{
    private $id;
    private $name;

private static $file_name="text_file.txt";



function __construct($_id,$_name){
$this->id=$_id;
$this->name=$_name;
}


function svg(){
return $this->id. ",".$this->name.PHP_EOL;

}



function store(){

file_put_contents(self::$file_name,$this-> svg(),FILE_APPEND);

}



}




?>