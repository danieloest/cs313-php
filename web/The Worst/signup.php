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
    <form onSubmit="return signUp()" action="addUser.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <p class="error"></p>
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <p class="error"></p>
          <label for="passwordConfirm">Confirm Your Password</label>
          <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" aria-describedby="helpId" placeholder="">
        </div>
        <div class="center">
            <input type="submit" value="Sign Up">
        </div>
    </form>
    <div class="center">
        <p id="errorMessage">
    </div>
    <a href="signin.php"><p>Already registered? Sign in here</p></a>
    <script>
        function signUp() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var passwordConfirm = document.getElementById("passwordConfirm").value;
            // Confirm passwords are the same
            if (password != passwordConfirm) {
                var error = document.getElementsByClassName("error");
                for (var i = 0; i < error.length; i++) {
                    error[i].innerHTML = "*";
                }
                document.getElementById("errorMessage").innerHTML = "Passwords did not match";
                return false;
            }
            // Confirm password has a number and is longer than 7 characters
            else if (/\d/.test(password) == false || password.length < 7) {
                var error = document.getElementsByClassName("error");
                for (var i = 0; i < error.length; i++) {
                    error[i].innerHTML = "*";
                }
                document.getElementById("errorMessage").innerHTML = "Password must contain at least 7 charactes and a number";
                return false;
            }
            else {
                return true;
            }
        }
    </script>
</body>
</html>