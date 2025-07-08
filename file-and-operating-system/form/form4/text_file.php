<?php
class Student{
    private $id;
    private $name;
    private $phone;
private static $file_store="data.txt";

function __construct($_id,$_name,$_phone){
    $this->name=$_name;
    $this->id=$_id;
    $this->phone=$_phone;

}
function fn(){
    return  $this->id."-".$this->name."-". $this->phone.PHP_EOL;
}
function save(){
    file_put_contents(self::$file_store,$this->fn(),FILE_APPEND);
}


// display studen
public static function display_students(){

    $std=file(self::$file_store);
    echo "<b>ID | Name</b><br>";
    foreach($std as $d){
        list($id,$name,$phone)=explode("-",trim($d));
        echo "$id | $name | $phone<br>";
    }
}







}





?>