<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Eligibility Form</title>
    <script>
        function checkEligibility() {
            var age = document.getElementById("age").value;
            var nationality = document.querySelector('input[name="nationality"]:checked').value;

            if (age >= 18 && nationality === "Indian") {
                alert("You are eligible to vote.");
            } else {
                alert("You are not eligible to vote.");
            }
        }
    </script>
</head>
<body>
    <h2>Voting Eligibility Form</h2>
    <form onsubmit="checkEligibility(); return false;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label>Nationality:</label><br>
        <input type="radio" id="indian" name="nationality" value="Indian" required>
        <label for="indian">Indian</label><br>
        <input type="radio" id="non-indian" name="nationality" value="Non-Indian" required>
        <label for="non-indian">Non-Indian</label><br><br>

        <input type="submit" value="Check Eligibility">
    </form>
</body>
</html>