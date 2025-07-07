<?php
class Faname{
    private $id;
    private $name;
    private $contact;
private static $file_name="text_file.txt";



function __construct($_id,$_name,$_contact){
$this->id=$_id;
$this->name=$_name;
$this->contact=$_contact;

}


function svg(){
return $this->id. "-".$this->name."-".$this->contact.PHP_EOL;

}



function store(){

file_put_contents(self::$file_name,$this-> svg(),FILE_APPEND);

}



}




?>