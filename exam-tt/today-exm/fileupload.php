<?php
session_start();

// return to login
if (!isset($_SESSION["sname"])) {
    header("Location: login.php");
    exit();
}

// SetUp
$imgDir = "pic/";
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
$maxSizeKb = 400;
$uploadedImages = [];

// Check file upload
if (isset($_POST['submit'])) {
    foreach ($_FILES['file']['name'] as $i => $name) {
        $tmp = $_FILES['file']['tmp_name'][$i];
        $type = $_FILES['file']['type'][$i];
        $sizeKb = $_FILES['file']['size'][$i] / 1024;

        if ($sizeKb > $maxSizeKb) {
            echo "<p style='color:red;'>$name is too big!</p>";
            continue;
        }

        if (!in_array($type, $allowedTypes)) {
            echo "<p style='color:red;'>$name type not allowed!</p>";
            continue;
        }

        if (move_uploaded_file($tmp, $imgDir . $name)) {
            $uploadedImages[] = $name;
        }
    }
}
?>

<!-- HTML PART -->
<!DOCTYPE html>
<html>
<head><title>Upload</title>
<style>
    div{
     background-color:skyblue;
            width: 350px;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            font-weight:bolder;  
    }
      .logout-btn {
            background: #2619e6ff;
            color: white;
            padding: 5px 5px;
            border-radius: 6px;
            font-size: 14px;
            text-decoration:none;
        }
</style>
</head>
<body>
    <div>
    <form method="post" enctype="multipart/form-data">
        <fieldset>
            <legend style="text-align:center">Upload Photos</legend>
        <input type="file" name="file[]" multiple required><br> <br>
        <input type="submit" name="submit" value="Upload">
        </fieldset>
    </form>
    </div>

    <?php if (!empty($uploadedImages)): ?>
        <h3>Uploaded Images</h3>
        <?php foreach ($uploadedImages as $img): ?>
            <img src="pic/<?php echo $img; ?>" width="150">
        <?php endforeach; ?>
    <?php endif; ?>
    <br><br>
    <a href="logout.php" class="logout-btn">Logout</a>
</body>
</html>
