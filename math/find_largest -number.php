<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <h3>Find the Largest of Three Numbers</h3>

    <form method="post" action="">
        Number X:
        <input type="number" id="numX" name="numX" required><br><br>
        Number Y:
        <input type="number" id="numY" name="numY" required><br><br>
        Number Z:
        <input type="number" id="numZ" name="numZ" required><br><br>

        <input type="submit" value="Find Largest">
    </form>

    <?php
    // PHP code to process the form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the numbers from the form
        $x = $_POST['numX'];
        $y = $_POST['numY'];
        $z = $_POST['numZ'];

        echo "<h4>Results:</h4>";
        echo "<p>You entered X: $x, Y: $y, Z: $z</p>";

        // Logic to find the largest number
        if (($x > $y) && ($x > $z)) {
            echo "<p>The Largest Number is X: <strong>$x</strong></p>";
        } elseif (($y > $x) && ($y > $z)) {
            echo "<p>The Largest Number is Y: <strong>$y</strong></p>";
        } else {
            echo "<p>The Largest Number is Z: <strong>$z</strong></p>";
        }
    }
    ?>
</body>
</html>