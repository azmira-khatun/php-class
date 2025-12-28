<?php
// 1. **Database Connection Parameters**
$servername = "localhost";
$username = "root"; // <-- CHANGE THIS
$password = ""; // <-- CHANGE THIS
$dbname = "form"; // <-- CHANGE THIS

// 1. Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// **********************************************
//              FORM SUBMISSION LOGIC (CREATE)
// **********************************************
$message = ""; // Variable to display status messages

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_employee'])) {
    // 2. Data Sanitization
    $firstName = $conn->real_escape_string($_POST['first_name']);
    $lastName = $conn->real_escape_string($_POST['last_name']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $salary = (int) $_POST['salary']; // Ensuring an integer value

    // 3. SQL for Data Insertion (INSERT)
    $insert_sql = "INSERT INTO employeeDemographics (FirstName, LastName, Gender, Salary)
                    VALUES ('$firstName', '$lastName', '$gender', $salary)";

    if ($conn->query($insert_sql) === TRUE) {
        $message = "<div class='success-msg'>✅ Data successfully saved!</div>";
    } else {
        $message = "<div class='error-msg'>❌ Failed to save data: " . $conn->error . "</div>";
    }
}

// **********************************************
//             DATA RETRIEVAL LOGIC (READ)
// **********************************************
$read_sql = "
    SELECT 
        EmployeeId, 
        FirstName, 
        LastName, 
        Gender, 
        Salary
    FROM 
        employeeDemographics 
    ORDER BY 
        EmployeeId DESC"; // Newest data will be displayed at the top

$result = $conn->query($read_sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee Form and Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        /* --- Form Styles --- */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* --- Table Styles --- */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        /* --- Message Styles --- */
        .success-msg {
            color: green;
            border: 1px solid green;
            background-color: #e6ffe6;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .error-msg {
            color: red;
            border: 1px solid red;
            background-color: #ffe6e6;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Employee Data Management</h1>

        <?php echo $message; // Display status message ?>

        <h2>Add New Employee</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name">
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">-- Select --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" id="salary" name="salary" required min="1000">
            </div>

            <button type="submit" name="submit_employee">Save Data</button>
        </form>

        <h2 style="margin-top: 40px;">List of Saved Employees</h2>

        <?php
        if ($result && $result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Salary</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["EmployeeId"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["FirstName"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["LastName"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["Gender"]) . "</td>";
                echo "<td>$" . number_format($row["Salary"], 0) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No data has been saved yet.</p>";
        }

        // 4. Close Connection
        $conn->close();
        ?>

    </div>

</body>

</html>