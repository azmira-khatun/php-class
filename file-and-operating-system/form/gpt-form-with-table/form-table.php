<?php
class FormData {
    private $id;
    private $name;
    private $batch;
    private static $file_path = "data.txt";

    function __construct($_id, $_name, $_batch) {
        $this->id = $_id;
        $this->name = $_name;
        $this->batch = $_batch;
    }

    function svg() {
        return $this->id . "-" . $this->name . "-" . $this->batch . PHP_EOL;
    }

    function store() {
        file_put_contents(self::$file_path, $this->svg(), FILE_APPEND);
    }

    public static function display_result() {
        if (!file_exists(self::$file_path)) {
            echo "<p style='text-align:center;'>Input the value</p>";
            return;
        }

        $std = file(self::$file_path);

        echo "<div style='display: flex; justify-content: center; margin-top: 20px;'>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Name</th><th>Batch</th></tr>";

        foreach ($std as $d) {
            if (!empty(trim($d))) {
                list($id, $name, $batch) = explode("-", trim($d));
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$name</td>";
                echo "<td>$batch</td>";
                echo "</tr>";
            }
        }

        echo "</table>";
        echo "</div>";
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
</head>
<body>

<div style="text-align: center; margin-top: 30px;">
    <form method="post">
        <input type="text" name="id" placeholder="ID" required><br><br>
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="text" name="batch" placeholder="Batch" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];

    $form = new FormData($id, $name, $batch);
    $form->store();
}

// Show results below the form
FormData::display_result();
?>

</body>
</html>
