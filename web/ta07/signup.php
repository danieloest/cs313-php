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
    <form action="addUser.php" method="POST">
    <label for="username">User Name</label>
    <input type="text" name="username" id="">
    <br>
    <div class="flex-container">
    <p class="error">
    <?php 
    if ($_GET["error"] == 1)
    {
        echo "*";
    }
    ?>
     </p>
    <label for="password">Password</label>
    <input type="password" name="password" id="">
    </div>
    <br>
    <div class="flex-container">
    <p class="error">
    <?php
    if ($_GET["error"] == 1)
    {
        echo "*";
    }
    ?>
    </p>
    <label for="passwordConfirm">Confirm Password</label>
    <input type="password" name="passwordConfirm" id="">
    </div>
    <input type="submit" value="Sign Up">
    </form>
    <a href="signup.php"><p>Already a member? Sign in here</p></a>

</body>
</html>