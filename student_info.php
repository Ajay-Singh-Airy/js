<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Information Form</title>

    <style>

        body {

            font-family: Arial, sans-serif;

        }
.form-container {
max-width: 500px;

     margin: auto;

            padding: 20px;

            border: 1px solid #ccc;

            border-radius: 10px;

        }

        .error {

            color: red;

        }

        .success {

            color: green;

        }

    </style>

</head>

<body>

    <div class="form-container">

        <h2>Student Information Form</h2>

        <form action="process_student.php" method="post">

            <label for="name">Name:</label><br>

            <input type="text" id="name" name="name" required><br><br>

            

            <label for="age">Age:</label><br>

            <input type="number" id="age" name="age" required><br><br>

            

            <label>Gender:</label><br>

            <input type="radio" id="male" name="gender" value="Male" required>

            <label for="male">Male</label><br>

            <input type="radio" id="female" name="gender" value="Female" required>

            <label for="female">Female</label><br><br>

            

            <input type="submit" value="Submit">

        </form>

    </div>

</body>

</html>




<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Form Processing</title>

<style>

body {

font-family: Arial, sans-serif;

}

.result-container {

max-width: 500px;

margin: auto;

padding: 20px;

border: 1px solid #ccc;

border-radius: 10px;

}

.error {

color: red;

}

.success {

color: green;

}

</style>

</head>

<body>

<div class="result-container">

<h2>Form Processing Result</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = trim($_POST["name"]);

$age = trim($_POST["age"]);

$gender = trim($_POST["gender"]);



// Database connection

$servername = "localhost";

$db_username = "root"; // change as needed

$db_password = ""; // change as needed

$dbname = "school"; // change as needed


$conn = new mysqli($servername, $db_username, $db_password, $dbname);


// Check connection

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}


// Prepare and bind

$stmt = $conn->prepare("INSERT INTO students (name, age, gender) VALUES (?, ?, ?)");

$stmt->bind_param("sis", $name, $age, $gender);


// Execute and check

if ($stmt->execute()) {

echo "<p class='success'>New record created successfully!</p>";

echo "<p><strong>Name:</strong> $name</p>";

echo "<p><strong>Age:</strong> $age</p>";

echo "<p><strong>Gender:</strong> $gender</p>";

} else {

echo "<p class='error'>Error: " . $stmt->error . "</p>";

}


// Close connections

$stmt->close();

$conn->close();

} else {

echo "<p class='error'>Invalid request method. <a href='student_form.html'>Go to form page</a></p>";

}

?>

</div>

</body>

</html>