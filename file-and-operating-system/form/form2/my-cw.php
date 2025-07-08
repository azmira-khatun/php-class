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

public static function display_result() {
        if (!file_exists(self::$file_name)) {
            echo "No data found.<br>";
            return;
        }

        $std = file(self::$file_name);

        foreach ($std as $d) {
            // $d = trim($d); // remove newline and whitespace
            if (!empty($d)) {
                list($id, $name, $contact) = explode("-", trim($d));
                echo "<b>$id - $name - $contact</b><br>";
            }
        }
    }




}







// echo "<table border='1'>";
// echo "<tr><th>ID</th><th>Name</th><th>Contact</th></tr>";
// foreach ($std as $d) {
//     if (!empty($d)) {
//         list($id, $name, $contact) = explode("-", trim($d));
//         echo "<tr><td>$id</td><td>$name</td><td>$contact</td></tr>";
//     }
// }
// echo "</table>";



?>