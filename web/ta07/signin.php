<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="" onsubmit="return false">
    <label for="username">User Name</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <!-- <input type="submit" value="Sign Up"> -->
    <button onclick="login()">Sign in</button>
    </form>
    <script>
    function login() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var parameters = 'username="' + username + '"&password="' + password + '"';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText;
                console.log(response.stringify());
                // Handle if success or not
            }
        };
        xhttp.open("POST", "loginUser.php", true);
        xhttp.send(parameters);
    }
    </script>
</body>
</html>