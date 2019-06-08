<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="worst.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>The Worst</title>
</head>
<body>
    <?php include 'connect.php';?>
    <?php include 'header.php';?>
    <form action="#" method="" onsubmit="return false">
    <div class="form-group">
        <label for="username">User Name</label>
        <input type="text"  class="form-control" name="username" id="username">
    </div>
    <br>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password"  class="form-control" name="password" id="password">
    </div>
    <div class="center">
        <button onclick="login()"  class="btn btn-primary">Sign in</button>
    </div>
    </form>
    <div class="center">
        <br>
        <p id="errorMessage"></p>
        <a href="signup.php"><p>Not a member? Sign up here</p></a>
    </div>
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
                    
                    document.getElementById('errorMessage').innerHTML = response;
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