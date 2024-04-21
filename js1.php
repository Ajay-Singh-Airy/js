<!DOCTYPE html>
<html>
<head>
    <title>Maruti Car Survey</title>
    <style>
        table, th, td {
            border: 1px solid rgb(21, 4, 4);
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Maruti Car Survey</h1>

    <label for="city">Select your city:</label>
    <select id="city">
        <option value="Delhi">Delhi</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Chennai">Chennai</option>
        <option value="Kolkata">Kolkata</option>
    </select>
    
    <label for="model">Select your Maruti car model:</label>
    <select id="model">
        <option value="K10">Maruti-K10</option>
        <option value="Zen-Astelo">Zen-Astelo</option>
        <option value="Wagnor">Wagnor</option>
        <option value="SX4">Maruti-SX4</option>
    </select>

    <button onclick="submitSurvey()">Submit</button>

    <h2>Survey Results:</h2>
    <table id="results">
        
    </table>

    <script>
      
        var surveyResults = {
            "Delhi": {"K10": 0, "Zen-Astelo": 0, "Wagnor": 0, "SX4": 0},
            "Mumbai": {"K10": 0, "Zen-Astelo": 0, "Wagnor": 0, "SX4": 0},
            "Chennai": {"K10": 0, "Zen-Astelo": 0, "Wagnor": 0, "SX4": 0},
            "Kolkata": {"K10": 0, "Zen-Astelo": 0, "Wagnor": 0, "SX4": 0}
        };

        function submitSurvey() {
            var city = document.getElementById('city').value;
            var model = document.getElementById('model').value;
            surveyResults[city][model]++;
            displayResults();
        }

        function displayResults() {
            var table = document.getElementById('results');
            table.innerHTML = '<tr><th>City</th><th>Maruti-K10</th><th>Zen-Astelo</th><th>Wagnor</th><th>Maruti-SX4</th></tr>';
            for (var city in surveyResults) {
                var row = '<tr><td>' + city + '</td>';
                for (var model in surveyResults[city]) {
                    row += '<td>' + surveyResults[city][model] + '</td>';
                }
                row += '</tr>';
                table.innerHTML += row;
            }
        }
        window.onload = function() {
            displayResults();
        };
    </script>
</body>
</html>