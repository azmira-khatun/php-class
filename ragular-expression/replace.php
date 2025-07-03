
<?php
// This function searches for specific string pattern and replace the original string with the replacement string, if found.

//  preg_replace ( $pattern, $replace,  $original )
//  preg_replace ( $pattern, $replace,  input, limit, count )

$s = "Visit Microsoft! Microsoft!";
$p = "/microsoft/i";

echo preg_replace($p,"Main Office",$s);

?>
