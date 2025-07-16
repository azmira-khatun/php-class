<?php
class FormData {
    private $id;
    private $name;
    private $gmail;
    private static $file_path = "data.txt";

    public function __construct($id, $name, $gmail) {
        $this->id = $id;
        $this->name = $name;
        $this->gmail = $gmail;
        echo "Hello, $name<br>";
    }

    protected function svg() {
        return "{$this->id}-{$this->name}-{$this->gmail}" . PHP_EOL;
    }

    public function store() {
        file_put_contents(self::$file_path, $this->svg(), FILE_APPEND);
    }

    public static function display_result() {
        if (!file_exists(self::$file_path)) {
            echo "not found any value.<br>";
            return;
        }
        $std = file(self::$file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Gmail</th></tr>";
        foreach ($std as $d) {
            list($id, $name, $gmail) = explode("-", $d);
            echo "<tr><td>$id</td><td>$name</td><td>$gmail</td></tr>";
        }
        echo "</table>";
    }

    public function display() {
        echo "This is my first task.<br>";
    }
}

class FormChildren extends FormData {
    public $address;
    public function __construct($id, $name, $gmail, $address) {
        parent::__construct($id, $name, $gmail);
        $this->address = $address;
        echo "I live in {$this->address}.<br>";
    }
    public function getInfo() {
        echo "My village name is Nalta.<br>";
    }
}

$G = new FormChildren(1, "Mira", "mira@example.com", "Dhaka");
$G->getInfo();
$G->display();
$G->store();
// FormData::display_result();
