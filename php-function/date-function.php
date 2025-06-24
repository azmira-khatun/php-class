<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SYNTAX: checkdate(int $month, int $day, int $year): bool</h1>
    <h4>checkdate</h4>
    <?php
    // Checks the validity of the date formed by the arguments
    var_dump(checkdate(06,23,2025));
    var_dump(checkdate(23,06,2025));
    ?>
    <h4>date</h4>
    <?php
    // date(string $format, ?int $timestamp = null): string
    date_default_timezone_set('UTC');
    echo date('l');
    echo date('l JS\of F Y h:i:s A';);
    echo "june 23,2025 is on a".date("l", mktime(0, 0, 0, 6, 23, 2025));
    echo date(DATE_RFC2822);
    
    echo date(DATE_ATOM, mktime(0, 0, 0, 6, 23, 2025));

    ?>
    
</body>
</html>