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
    <form onsubmit="return signUp()" action="" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="passwordConfirm">Confirm Your Password</label>
          <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" aria-describedby="helpId" placeholder="">
        </div>
    </form>
</body>
</html>