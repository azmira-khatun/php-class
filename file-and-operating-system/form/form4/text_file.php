<?php
class Student{
    private $id;
    private $name;
private static $file_store="data.txt";

function __construct($_id,$_name){
    $this->name=$_name;
    $this->id=$_id;
}
function fn(){
    return  $this->id."-".$this->name.PHP_EOL;
}
function save(){
    file_put_contents(self::$file_store,$this->fn(),FILE_APPEND);
}


// display studen
public static function display_students(){

    $students=file(self::$file_store);
    echo "<b>ID | Name</b><br>";
    foreach($students as $d){
        list($id,$name)=explode(",",trim($d));
        echo "$id | $name<br>";
    }
}







}





?>