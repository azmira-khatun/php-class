
<!DOCTYPE html>
<html>
<head>
    <title>Vowel and Consonant Counter</title>
</head>
<body>
    <h2>Count Vowels and Consonants in PHP</h2>

    <form method="post" action="">
        Enter a string: <input type="text" name="text" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $text = strtolower($_POST['text']);  // convert to lowercase
        $vowels = 0;
        $consonants = 0;

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
            if (ctype_alpha($char)) { // check if it's a letter
                if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
                    $vowels++;
                } else {
                    $consonants++;
                }
            }
        }

        echo "<h3>Results:</h3>";
        echo "Vowels: $vowels <br>";
        echo "Consonants: $consonants";
    }
    ?>
</body>
</html>
