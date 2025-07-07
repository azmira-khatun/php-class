<?php
class Student{
    private $id;
    private $name;
private static $file_path="data.txt";

// constructor deya object banano hy
function __construct($_id,$_name){
    $this->id=$_id;
    $this->name=$_name;



}

// csv function
public function csv(){
 // child function -user define
return $this->id.",".$this->name.PHP_EOL;
// PHP_EOL (end of line and create new line)
}



// Save function
public function store(){

    // students=file(self::$file_path);
    // the file() reads a file into an array
file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
//  the file_put_contents() writes data to a file
// FILE_APPEND use to avoid deleting the existing content of the file
}



   
}



?>