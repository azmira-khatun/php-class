

<?php
class FormData{
    private $id;
    private $name;
    private $gmail;
    private $phone;
private static $file_path="data.txt";



function __construct($_id,$name,$gmail,$phone){
    $this->id=$_id;
    $this->name=$name;
    $this->gmail=$gmail;
    $this->phone=$phone;

}

function svg(){
    return $this->id."-". $this->name."-". $this->gmail."-".$this->phone.PHP_EOL;
}


function store(){

    file_put_contents(self:: $file_path,$this->svg(),FILE_APPEND);
}


  public static function display-data(){
if(!file_exists(self::$file_path)){
echo "input the value. <br>";
return;
}

$std=file(self::$file_path);


echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Gmail</th><th>Phone</th></tr>";

foreach($std as $d){
    if(!empty($d)){
        list($id,$name,$gmail,$phone)=explode("-", trim($d));
         echo "<tr><td>$id</td><td>$name</td><td>$gmail</td><td>$phone</td></tr>";

        // echo "<b>$id - $name - $contact</b><br>";

    }
}


echo "</table>";

}


}

?>