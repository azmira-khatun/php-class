<?php
class FormData{
private $id;
private $name;
private $contact;
private static $file_path="data.txt";

function _construct($_id,$_name,$_contact){
    $this->id=$_id;
        $this->name=$_id;
    $this->contact=$_id;

}

function svg(){
    return $this->id."-". $this->name."-". $this->contact.PHP_EOL;
}

function store(){
    file_put_contents(self::$file_path,$this->svg(),FILE_APPEND)
}

public static function display_ans(){

    if(!file_exists(self::$file_path)){

        echo "no data found";
        return;

        }

$std=file(self::$file_path);
foreach($std as $d){

    if(!empty($d)){
        list ($id,$name,$contact)=explode(",",trim($d));
        echo "$id - $name - $contact";


    }
    }
}



}













?>