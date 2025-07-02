<!DOCTYPE html>
<html>
<head>
    <title>Grade Point Calculator</title>
</head>
<body>
    <h2>Grade Point Calculator</h2>

    <form method="post" action="">
        Enter your result: <input type="number" name="result"  required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $result = $_POST['result'];
        $grade = "";

        if ($result >= 80 && $result <= 100) {
            $grade = "5.00 (A+)";
        } elseif ($result >= 70) {
            $grade = "4.00 (A)";
        } elseif ($result >= 60) {
            $grade = "3.50 (A-)";
        } elseif ($result >= 50) {
            $grade = "3.00 (B)";
        } elseif ($result >= 40) {
            $grade = "2.00 (C)";
        } elseif ($result >= 33) {
            $grade = "1.00 (D)";
        } else {
            $grade = "0.00 (F)";
        }

        echo "<h3>Your Grade Point is: $grade</h3>";
    }
    ?>

        <!-- switch Statement -->

<?php
    if (isset($_POST['submit'])) {
        $result = $_POST['result'];
        $grade = "";

        
        switch (true) {
            case ($result >= 80 && $result <= 100):
                $grade = "5.00 (A+)";
                break;
            case ($result >= 70):
                $grade = "4.00 (A)";
                break;
            case ($result >= 60):
                $grade = "3.50 (A-)";
                break;
            case ($result >= 50):
                $grade = "3.00 (B)";
                break;
            case ($result >= 40):
                $grade = "2.00 (C)";
                break;
            case ($result >= 33):
                $grade = "1.00 (D)";
                break;
            case ($result >= 0):
                $grade = "0.00 (F)";
                break;
            default:
                $grade = "Invalid input!";
        }

        echo "<h3>Your Grade Point is: $grade</h3>";
    }
    ?>
</body>