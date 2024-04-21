<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation</title>
<style>
    .error { color: red; }
</style>
</head>
<body>
    <form id="myForm" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <span id="nameError" class="error"></span>
        <br><br>



         <label for="id">Id:</label>
        <input type="id" id="id" name="id">
        <span id="idError" class="error"></span>
        <br><br>
        

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span id="emailError" class="error"></span>
        <br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="passwordError" class="error"></span>
        <br><br>


         <label for="confirm_password">Confirm Password:</label>
        <input type="confirm_password" id="confirm_password" name="confirm_password">
        <span id="passwordError" class="error"></span>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
             var id = document.getElementById("id").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            var isValid = true;

        
            if (name === "") {
                document.getElementById("nameError").innerHTML = "Name is required";
                isValid = false;
            } else {
                document.getElementById("nameError").innerHTML = "";
            }


            if (id === "") {
                document.getElementById("idError").innerHTML = "Id is required";
                isValid = false;
            } else {
                document.getElementById("idError").innerHTML = "";
            }

            if (email === "") {
                document.getElementById("emailError").innerHTML = "Email is required";
                isValid = false;
            } else {
                document.getElementById("emailError").innerHTML = "";
            }

            
            if (password === "") {
                document.getElementById("passwordError").innerHTML = "Password is required";
                isValid = false;
            } else {
                document.getElementById("passwordError").innerHTML = "";
            }



            if (confirm_password === "") {
                document.getElementById("passwordError").innerHTML = "Password doesn't match";
                isValid = false;
            } else {
                document.getElementById("passwordError").innerHTML = "";
            }

            return isValid;
        }
    </script>
</body>
</html>