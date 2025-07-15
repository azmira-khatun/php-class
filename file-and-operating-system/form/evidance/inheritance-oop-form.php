<?php
class StudentData extends FormData {
    private $department;

    function __construct($id, $name, $gmail, $phone, $department) {
        parent::__construct($id, $name, $gmail, $phone); // Parent constructor
        $this->department = $department;
    }

    // Override svg to add department
    function svg() {
        // আগের তথ্য নেব parent এর svg থেকে
        $baseData = parent::svg(); // Output: id-name-gmail-phone\n
        // নতুন তথ্য যুক্ত করব
        $extra = "Department: " . $this->department . PHP_EOL;
        return $baseData . $extra;
    }

    // যদি আলাদা করে নিজের show function করতে চান
    function show_department() {
        echo "Department: " . $this->department . "<br>";
    }
}
?>















<?php
$std1 = new StudentData(1, "Hasan", "hasan@gmail.com", "017xxxxxxx", "CSE");
$std1->store(); // data.txt তে সংরক্ষণ করবে

$std1->show_department(); // শুধু department দেখাবে

echo "<hr>";
FormData::display_data(); // টেবিল আকারে আগের তথ্যগুলো দেখাবে (department নয়)
?>



