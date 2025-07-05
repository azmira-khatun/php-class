
<?php
// Insert line breaks where newlines (\n) occur in the string
	// nl2br(string $string, bool $use_xhtml = true): string

$text = "Hello World!,
This is a new line,
Another one.";

echo nl2br($text);
?>
