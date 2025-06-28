<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Check Prime Number</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" min="1" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $isPrime = true;

        if ($num <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "<h3>$num is a Prime Number ✅</h3>";
        } else {
            echo "<h3>$num is NOT a Prime Number ❌</h3>";
        }
    }
    ?>
</body>
</html>