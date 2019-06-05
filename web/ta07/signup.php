<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="design.css">
    <title>Document</title>
</head>
<body>
    <!-- <form action="addUser.php" method="POST"> -->
        <!-- For stretch 3 -->
    <form action="#" method="" onsubmit="return false">
    <label for="username">User Name</label>
    <input type="text" name="username" id="username">
    <br>
    <p class="error">
    <?php 
    if ($_GET["error"] == 1 || $_GET["error"] == 2)
    {
        echo "*";
    }
    ?>
     </p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <p class="error">
    <?php
    if ($_GET["error"] == 1 || $_GET["error"] == 2)
    {
        echo "*";
    }
    ?>
    </p>
    <label for="passwordConfirm">Confirm Password</label>
    <input type="password" name="passwordConfirm" id="passwordConfirm">
    <!-- <input type="submit" value="Sign Up"> -->
    <!-- For stretch 3 -->
    <button onclick="signUp()">Sign Up</button>
    </form>
    <p id="errorMessage">
    <?php
    if ($_GET["error"] == 1)
    {
        echo "Passwords did not match";
    }
    if ($_GET["error"] == 2)
    {
        echo "Password must contain at least 7 charactes and a number";
    }
    ?>
    </p>
    <a href="signin.php"><p>Already a member? Sign in here</p></a>
    <script>
        function signUp() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var passwordConfirm = document.getElementById("passwordConfirm").value;
            console.log("\nUsername: " + username);
            console.log("\nPassword: " + password);
            console.log("\nPassword Confirm: " + passwordConfirm);
            // Confirm passwords are the same
            if (password != passwordConfirm) {
                var error = document.getElementsByClassName("error");
                for (var i = 0; i < error.length; i++) {
                    error[i].innerHTML = "*";
                }
                document.getElementById("errorMessage").innerHTML = "Passwords did not match";
            }
            else if (/\d/.test(password) == false || password.length < 7) {
                var error = document.getElementsByClassName("error");
                for (var i = 0; i < error.length; i++) {
                    error[i].innerHTML = "*";
                }
                document.getElementById("errorMessage").innerHTML = "Password must contain at least 7 charactes and a number";
            }
        }
    </script>
</body>
</html>