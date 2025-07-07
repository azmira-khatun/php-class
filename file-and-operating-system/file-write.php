<?php
$myfile=fopen("first.txt", "w") or die("Unable to open file!");

if($myfile){
    echo "File opened successfully!";

    $txt="this is my new file.\n";

    fwrite($myfile,$txt);
    
    
    $txt1="this is my second new file.\n";
    fwrite($myfile,$txt1);
    
    
    $txt2="this is my third file.\n";
    fwrite($myfile,$txt2);
    fclose($myfile);
}else{
    echo "Failed to open the file.";
}

?>