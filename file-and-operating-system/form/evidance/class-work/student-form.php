<?php
class FormData{
    private $id;
    private $name;
    private $gmail;

private static $file_path="data.txt";


function __construct($id,$name,$gmail){
    $this->id=$id;
        $this->name=$name;
    $this->gmail=$gmail;

}

function svg(){
    return $this->id."-". $this->name."-".$this->gmail.PHP_EOL;
}

function store(){
    file_put_contents(self::$file_path,$this->svg(),FILE_APPEND);
}

public static function display_result(){
    if(!file_exists(self::$file_path)){
        echo "not found any value.<br>";
        return;
    }
$std=file(self::$file_path);
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Gmail</th></tr>";
foreach($std as $d){
    if(!empty($d)){
        list($id,$name,$gmail)=explode("-",trim($d));
        echo "<tr><td>$id</td><td>$name</td><td>$gmail</td></tr>";
    }
}


echo "</table>";
}



}



?>