<?php
class FormData{
    private $id;
    private $name;
    private $batch;
private static $file_path="data.txt";

function __construct($_id,$_name,$_batch){
$this->id=$_id;
$this->name=$_name;
$this->batch=$_batch;

}

function svg(){
    return $this->id."-".$this->name ."-".$this->batch.PHP_EOL;
}

function store(){
    file_put_contents(self::$file_path,$this->svg(),FILE_APPEND);
}


 public static function display_result(){
    if(!file_exists(self::$file_path)){
echo "Input the value";
return;

    }
$std=file(self::$file_path);

foreach($std as $d){
if(!empty($d)){
    list($id,$name,$batch)=explode("-",trim($d));
    echo "<b>$id - $name - $batch</b><br>";
}

}








}





   
}









?>