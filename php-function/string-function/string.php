<?php 
//string function[strlen(),substr(),strtoupper(),StrSupper()]
echo strlen("Country");
echo "<br>";


function name(){ 
    return strlen("Bangladesh0");
}
echo name();
echo "<br>";

function aname(){ 
    return str_word_count("This module is php and mysql");
}
echo aname();





echo "<br>";
function ename(){ 
    return strrev("This module is");
}
echo ename();





echo "<br>";
// str_replace(search,replace,variable)
function zname(){
    $st="This is php module and is add another module mysql";

    return str_replace('is','IS',$st);
};
 echo zname();







echo "<br>";
function nam(){ 
    return substr("Bangladesh",4);
}
echo nam();
echo "<br>";

function nam1(){ 
    return strtoupper("bangladesh");
}
echo nam1();

echo "<br>";

function nam2(){ 
    return strtolower("BaNgladesh");
}
echo nam2();
?>