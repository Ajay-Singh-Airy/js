<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return validateForm()">
        <legend>Form Validation</legend>
        <label for="type">Type of Card:</label>
        <select id="type">
            <option value="Mcard" selected>Master Card</option>
            <option value="Visa">Visa</option>
            <option value="AE">American Express</option>
        </select>
        <br>
        <label for="prefix">Enter Card Number:</label>
        <input type="text" id="prefix" value="12">
        <input type="text" id="prefix2" value="23">
        <br>
        <input type="submit" value="Submit">
    </form>
    <script>
        function validateForm() {
            var cardType = document.getElementById("type").value;
            var prefix = ""+document.getElementById("prefix").value;
            var cardNumber = ""+document.getElementById("prefix2").value;
            var n = cardNumber.length;
            var s="Form is Valid";

            if (cardType == "Mcard") {
                if (n != 16 || (/^5[1-5]/.test(prefix)!=1) ){
                    s= "Form is not valid!";
                }
            } else if (cardType == "Visa") {
                if ((n != 16 && n != 13) || prefix != 4) {
                    s= "Form is not valid!";
                }
            } else {
                if (n != 15 || (prefix != 34 && prefix != 37)) {
                    s = "Form is not valid!";
                }
            }
            alert(`${s} ${prefix}  ${cardNumber}  ${cardType} `)
            if(s=="Form is Valid") {
                return true;
            }
            else return false;
        }
    </script>
</body>
</html>