<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Paragraph Content</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .content {
            font-size: 1.1em;
            color: #333;
            margin-top: 20px;
        }
    </style>
    <script>
        function modifyParagraph() {
            // Method 1: Using innerHTML
            var paragraph = document.getElementById("dummy-text");
            paragraph.innerHTML = "This is the <strong>modified</strong> paragraph content using innerHTML.";

            // Method 2: Using createTextNode and appendChild
            var additionalText = document.createTextNode(" Additional text added using createTextNode and appendChild.");
            paragraph.appendChild(additionalText);
        }
    </script>
</head>
<body>
    <h2>Modify Paragraph Content</h2>
    <p id="dummy-text" class="content">This is some dummy text that will be modified upon button click.</p>
    <button onclick="modifyParagraph()">Modify Paragraph</button>
</body>
</html>