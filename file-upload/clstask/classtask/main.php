<?php
if(isset($_POST['submit'])) {
    $file_add = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $img = 'img2/';
    $kb = $file_size / 1024;

    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

    if ($kb > 400) {
        echo "File is too large";
    } elseif (!in_array($file_type, $allowed_types)) {
        echo "File type not supported";
    } else {
        move_uploaded_file($file_add, $img . $file_name);
        echo "<b style='color: green;font-size: 16pt;'>Upload Success!!</b>";

        echo "<div style='text-align:center;margin: auto'>
            <img src='$img/$file_name' width='300px' style='margin-top: 30px'>
        </div>";

        echo "<b>File Name:</b> $file_name<br>";
        echo "<b>Tmp Name:</b> $file_add<br>";
        echo "<b>File Size:</b> $file_size bytes<br>";
        echo "<b>File Type:</b> $file_type<br>";
        echo "<b>File Error:</b> ".$_FILES['file']['error']."<br>";
    }
}
?>
