
<?php
// The htmlentities() function is used to convert special characters into HTML entities, making them safe to display on a web page without being interpreted as HTML.

// htmlentities(string $string, int $flags = ENT_COMPAT, ?string $encoding = null, bool $double_encode = true): string

$text ="Always Be 'Kind' to <b>Others</b>";

echo htmlentities($text);

?>
