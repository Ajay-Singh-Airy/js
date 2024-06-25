<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-list {
            color: #333;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
    <script>
        function showStudents() {
            var project = document.getElementById("project").value;
            var students = {
                "Project A": ["Alice", "Bob", "Charlie"],
                "Project B": ["David", "Eva", "Frank"],
                "Project C": ["George", "Hannah", "Irene"],
                "Project D": ["Jack", "Kathy", "Leon"],
                "Project E": ["Mike", "Nina", "Oscar"]
            };

            var studentList = document.getElementById("student-list");
            studentList.innerHTML = "";

            if (students[project]) {
                students[project].forEach(function(student) {
                    var li = document.createElement("li");
                    li.textContent = student;
                    studentList.appendChild(li);
                });
            }
        }
    </script>
</head>
<body>
    <h2>Select a Project</h2>
    <form>
        <label for="project">Choose a project:</label>
        <select id="project" name="project" onchange="showStudents()">
            <option value="">Select...</option>
            <option value="Project A">Project A</option>
            <option value="Project B">Project B</option>
            <option value="Project C">Project C</option>
            <option value="Project D">Project D</option>
            <option value="Project E">Project E</option>
        </select>
    </form>

    <h3>Students working on the project:</h3>
    <ul id="student-list" class="student-list"></ul>
</body>
</html>