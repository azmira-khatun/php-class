<?php
// 1. **ডাটাবেস সংযোগ কনফিগারেশন**
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("সংযোগ ব্যর্থ: " . $conn->connect_error);
}

// **********************************************
//              ফর্ম সাবমিশন লজিক (CREATE)
// **********************************************
// *দ্রষ্টব্য: এই অংশটি এখন শুধুমাত্র employeeDemographics টেবিলে ডেটা সেভ করবে।
//          EmployeeSalary-তে সেভ করার জন্য আরও লজিক প্রয়োজন, যা এই উদাহরণের বাইরে রাখা হলো।
//          তবে, নিচের READ লজিক দুটি টেবিল থেকেই ডেটা নেবে।
// **********************************************
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_employee'])) {
    // ডেটা স্যানিটাইজেশন
    $firstName = $conn->real_escape_string($_POST['first_name']);
    $lastName = $conn->real_escape_string($_POST['last_name']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $salary = (int) $_POST['salary'];

    // ডেটা ইনসার্ট করার SQL (শুধুমাত্র Demographics টেবিলে)
    $insert_sql = "INSERT INTO employeeDemographics (FirstName, LastName, Gender)
                    VALUES ('$firstName', '$lastName', '$gender')";

    // এখানে সেভ করা কঠিন, কারণ Salary কলামটি EmployeeSalary টেবিলে থাকার কথা। 
    // সহজ করার জন্য, আপাতত ধরুন Demographics টেবিলে শুধু নাম ও লিঙ্গ সেভ হচ্ছে।
    // এই সমস্যার সমাধান করার জন্য আপনার ডাটাবেস কাঠামো ঠিক করতে হবে। 

    // আপাতত, ইনসার্ট লজিক সহজ রাখা হলো।
    if ($conn->query($insert_sql) === TRUE) {
        // ধরুন ইনসার্টের পরে EmployeeId পাওয়া গেছে
        $new_employee_id = $conn->insert_id;

        // এখন Salary টেবিলে ডেটা ইনসার্ট করা:
        $insert_salary_sql = "INSERT INTO EmployeeSalary (EmployeeId, Salary) VALUES ($new_employee_id, $salary)";

        if ($conn->query($insert_salary_sql) === TRUE) {
            $message = "<div class='success-msg'>✅ ডেটা সফলভাবে সেভ করা হয়েছে!</div>";
        } else {
            $message = "<div class='error-msg'>❌ Salary ডেটা সেভ করতে ব্যর্থ: " . $conn->error . "</div>";
        }

    } else {
        $message = "<div class='error-msg'>❌ ডেটা সেভ করতে ব্যর্থ: " . $conn->error . "</div>";
    }
}


// **********************************************
//      ডেটা রিট্রিভাল লজিক (READ) - JOIN সহ
// **********************************************
// আপনার মূল জটিল কোয়েরিটি ব্যবহার করা হচ্ছে
$read_sql = "
    SELECT 
        ED.EmployeeId, 
        ED.FirstName, 
        ED.LastName, 
        ED.Gender, 
        ES.Salary, 
        COUNT(ED.Gender) OVER (PARTITION BY ED.Gender) AS TotalGender
    FROM 
        employeeDemographics ED
    JOIN 
        EmployeeSalary ES 
    ON 
        ED.EmployeeId = ES.EmployeeId
    ORDER BY 
        ED.EmployeeId DESC";

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
            max-width: 1000px;
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

        /* Form Styles */
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

        /* Table Styles */
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

        /* Message Styles */
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

        <h1>কর্মচারীর ডেটা ম্যানেজমেন্ট</h1>

        <?php echo $message; // স্ট্যাটাস বার্তা প্রদর্শন ?>

        <h2>নতুন কর্মচারী যোগ করুন</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="first_name">ফার্স্ট নেম:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">লাস্ট নেম:</label>
                <input type="text" id="last_name" name="last_name">
            </div>

            <div class="form-group">
                <label for="gender">লিঙ্গ (Gender):</label>
                <select id="gender" name="gender" required>
                    <option value="">-- নির্বাচন করুন --</option>
                    <option value="Male">পুরুষ (Male)</option>
                    <option value="Female">মহিলা (Female)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="salary">বেতন (Salary):</label>
                <input type="number" id="salary" name="salary" required min="1000">
            </div>

            <button type="submit" name="submit_employee">ডেটা সেভ করুন</button>
        </form>

        <h2 style="margin-top: 40px;">সেভ করা কর্মচারীর তালিকা</h2>

        <?php
        if ($result && $result->num_rows > 0) {
            echo "<table>";
            // *** নতুন কলামটি এখানে যোগ করা হয়েছে ***
            echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Salary</th><th>Total Gender Count</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["EmployeeId"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["FirstName"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["LastName"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["Gender"]) . "</td>";
                echo "<td>$" . number_format($row["Salary"], 0) . "</td>";
                // *** TotalGender ডিসপ্লে করা হচ্ছে ***
                echo "<td>" . htmlspecialchars($row["TotalGender"]) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>এখনও কোনো ডেটা সেভ করা হয়নি অথবা ডাটাবেস সংযোগে সমস্যা আছে।</p>";
        }

        $conn->close();
        ?>

    </div>

</body>

</html>