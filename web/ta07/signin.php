<?php session_start(); ?>
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
    <form action="#" method="" onsubmit="return false">
    <label for="username">User Name</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button onclick="login()">Sign in</button>
    </form>
    <p id="messageBox"></p>
    <a href="signup.php"><p>Not a member? Sign up here</p></a>
    <script>
    function login() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var parameters = 'username=' + username + '&password=' + password;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("original response: " + this.responseText);
                var response = JSON.parse(this.responseText);
                if (response == "Success")
                {
                    window.location = "home.php";
                }
                else
                {

                    document.getElementById('messageBox').innerHTML = response;
                }
                console.log("\nParsed: " + response);
            }
        };
        xhttp.open("POST", "loginUser.php", true);
        // Needs the line below in order to send parameters. This specifies that it is sending data to be used.
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(parameters);
    }
    </script>
</body>
</html>