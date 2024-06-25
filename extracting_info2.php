<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
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
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Information Form</h2>
        <form action="process_form.php" method="post">
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
            $errors = [];

            // Validate name
            if (empty($name)) {
                $errors[] = "Name is required.";
            } elseif (strlen($name) < 10 || strlen($name) > 20) {
                $errors[] = "Name must be between 10 and 20 characters.";
            }

            // Validate age
            if (empty($age)) {
                $errors[] = "Age is required.";
            } elseif (!is_numeric($age) || $age < 0) {
                $errors[] = "Age must be a non-negative number.";
            }

            // Validate gender
            if (empty($gender)) {
                $errors[] = "Gender is required.";
            }

            // Display errors or success message
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p class='error'>$error</p>";
                }
            } else {
                echo "<p class='success'>Form submitted successfully!</p>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Age:</strong> $age</p>";
                echo "<p><strong>Gender:</strong> $gender</p>";
            }
        } else {
            echo "<p class='error'>Invalid request method.</p>";
        }
        ?>
    </div>
</body>
</html>