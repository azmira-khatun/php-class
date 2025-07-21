<?php
session_start();
if (!isset($_SESSION["sname"])) {
    header("Location: login.php");
    exit();
}

$imgDir = "pic/";
$allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
$maxSizeKb = 400;
$uploadedImages = [];

if (isset($_POST['submit'])) {
    foreach ($_FILES['file']['name'] as $key => $name) {
        $tmpName = $_FILES['file']['tmp_name'][$key];
        $type = $_FILES['file']['type'][$key];
        $size = $_FILES['file']['size'][$key];
        $kb = $size / 1024;

        if ($kb > $maxSizeKb) {
            echo "<p class='error'>$name is too large! (Max 400KB)</p>";
            continue;
        }

        if (!in_array($type, $allowedTypes)) {
            echo "<p class='error'>$name has unsupported file type!</p>";
            continue;
        }

        if (move_uploaded_file($tmpName, $imgDir . $name)) {
            $uploadedImages[] = $name;
        } else {
            echo "<p class='error'>Failed to upload $name.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stylish Photo Album Upload</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3f4f6;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
        }

        input[type="file"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 15px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007BFF;
            border: none;
            padding: 12px 25px;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-weight: bold;
            margin: 10px 0;
            text-align: center;
        }

        .gallery-title {
            text-align: center;
            margin-top: 40px;
            font-size: 24px;
            color: #444;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .gallery img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .logout-btn {
            display: inline-block;
            background: #dc3545;
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        .logout-btn:hover {
            background: #c82333;
        }

        .button-row {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📤 Upload Your Photos</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple required><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</div>

<?php if (!empty($uploadedImages)) : ?>
    <div class="container">
        <div class="gallery-title">📷 Uploaded Album</div>
        <div class="gallery">
            <?php foreach ($uploadedImages as $imgName): ?>
                <img src="<?php echo $imgDir . $imgName; ?>" alt="Uploaded Image">
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<div class="button-row">
    <a href="logout.php" class="logout-btn">Logout</a>

</div>

</body>
</html>