<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return callcheck()" style="align-items: center;justify-content: flex-end;">
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Enter your name"><br>
        <label for="Email">Email</label>
        <input type="email" id="Email" placeholder="Enter your email"><br>
        <label for="Number" >Number</label>
        <input type="text" id="Number" placeholder="Enter your number">
        <input type="submit" value="Submit">
    </form>
    <script>
        function callcheck(){
            var Name = document.getElementById("name").value;
            var Email = document.getElementById("Email").value;
            var Num = document.getElementById("Number").value;
            
            if(!/^[A-Z ][a-z ]*$/.test(Name) || !/^[a-zA-Z0-9]+@[a-zA-Z]{3,5}\.[a-zA-Z]{2,3}$/.test(Email) || Num.length !== 10 || !/^[0-9]+$/.test(Num)){
                window.alert("Form filled incorrectly");
                return false;

            }
            return true; 
        }
    </script>
</body>
</html>