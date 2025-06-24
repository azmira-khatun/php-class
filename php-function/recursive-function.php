<?php
function Info($num){
    if($num<=8){
        echo "$num <br>";
        Info($num+1);
    }
}
Info(3);





?>